<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AccountPlan;
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

    public function accountPlans(Request $req)
    {
        $user = Auth::user();
        $plans = AccountPlan::where('user_id', $user->id)->get();
        // dd($plans);
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
        return view('user.withdrawals', compact('user'));
    }

    
}
