<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AccountPlan;
use App\Models\Commission;
use App\Models\User;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showProfile(Request $request)
    {
        // if ($request->has('ref')) {
        //     session(['referrer' => $request->query('ref')]);
        // }
        $user = Auth::user();
        // dd($user->referrals);
        return view('user.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:6',
            'username' => ['required', 'string', 'alpha_dash', 'min:3', 'max:30'],
            'address' => 'required|min:8',
        ]);

        $user = Auth::user();
        $data = $request->only(['name', 'username', 'address']);
        if ($user->username != $data['username']) {
            $findUser = User::whereUsername($data['username'])->first();
            if ($findUser) {
                return back()->with('error', 'Username already taken');
            }
        }
        $result = User::where('id', $user->id)->update([
            'name' => $data['name'],
            'username' => $data['username'],
            'wallet_address' => $data['address']
        ]);

        if ($result) {
            return back()->with('success', 'Profile updated successfully.');
        } else {
            return back()->with('error', 'Unable to update profile, try again');
        }
    }

    public function accountPlans(Request $req)
    {
        $user = Auth::user();
        $plans = AccountPlan::where('user_id', $user->id)->get();
        // dd($plans->toArray());
        return view('user.account_plans', compact('plans'));
    }

    public function referrals(Request $req)
    {
        $user = Auth::user();
        return view('user.referrals', compact('user'));
    }

    public function withdrawals(Request $req)
    {
        $user = Auth::user();
        $commission = Commission::where('user_id', $user->id)->sum('amount');
        $totalWithdraw = Withdrawal::where('user_id', $user->id)->whereNot('status', 'rejected')->sum('amount');
        $withdrawals = Withdrawal::where('user_id', $user->id)->orderBy('created_at', 'DESC')->get();
        $balance = abs($commission - $totalWithdraw);
        // dd($totalWithdraw, $balance, $withdrawals, $commission);
        return view('user.withdrawals', compact('user', 'commission', 'totalWithdraw', 'withdrawals', 'balance'));
    }

    public function processWithdrawal(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required|numeric|min:10',
        ]);
        $amount = abs($request->input('amount'));

        $user = Auth::user();
        $commission = Commission::where('user_id', $user->id)->sum('amount');
        $totalWithdraw = Withdrawal::where('user_id', $user->id)->whereNot('status', 'rejected')->sum('amount');
        $balance = abs($commission - $totalWithdraw);
        if ($balance >= $amount) {
            Withdrawal::create([
                'amount' => $amount, 'user_id' => $user->id
            ]);
            return back()->with('success', 'Your withdrawal request is being processed.');
        } else {
            return back()->with('error', 'Insufficient funds for withdrawal request');
        }
    }
}
