<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AccountPlan;
use Illuminate\Support\Str;
use App\Models\Commission;
use App\Models\Package;
use App\Models\PackagePlan;
use App\Models\User;
use App\Models\Withdrawal;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard()
    {
        $user = auth()->guard('admin')->user();
        $users = User::count();
        $packages = Package::count();
        $withdrawals = Withdrawal::where('status', 'pending')->orderBy('created_at', 'DESC')->get();
        return view('admin.dashboard', compact('user', 'withdrawals', 'users', 'packages'));
    }

    public function profile()
    {
        $user = auth()->guard('admin')->user();
        return view('admin.profile', compact('user'));
    }

    public function users()
    {
        // $user = auth()->guard('admin')->user();
        $users = User::get();
        return view('admin.users', compact('users'));
    }

    public function userPlans(Request $request)
    {
        $user_id = $request->input('id');
        if ($user_id) {
            $user = User::findOrFail($user_id);
            $plans = AccountPlan::where('user_id', $user->id)->get();
            return view('admin.user_plans', compact('plans', 'user'));
        } else {
            return back();
        }
    }



    public function withdrawals(Request $request)
    {
        $type = $request->input('type') ?? 'pending';
        $withdrawals = [];
        if (in_array($type, ['pending', 'rejected', 'sent'])) {
            $withdrawals = Withdrawal::where('status', $type)->orderBy('created_at', 'DESC')->get();
        } else {
            $withdrawals = Withdrawal::where('status', 'pending')->orderBy('created_at', 'DESC')->get();
        }
        return view('admin.withdrawals', compact('withdrawals', 'type'));
    }

    public function packages(Request $request)
    {
        $packages = Package::get();
        return view('admin.packages', compact('packages'));
    }

    public function addPackage(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
        ]);
        Package::create([
            'name' => $request->input('title'),
            'slug' => Str::slug($request->input('title'))
        ]);
        return back()->with('success', 'Package has been added');
    }

    public function deletePackage(Request $request)
    {

        $this->validate($request, [
            'package_id' => 'required',
        ]);
        Package::where('id', $request->input('package_id'))->delete();

        return back()->with('success', 'Package has been deleted');
    }

    public function package($id)
    {
        $package = Package::findOrFail($id);
        $packagePlans = PackagePlan::where('package_id', $id)->get();
        return view('admin.package_plans', compact('packagePlans', 'package'));
    }

    public function addPackagePlan(Request $request, $id)
    {

        $this->validate($request, [
            'target' => 'required',
            'price' => 'required'
        ]);
        $package = Package::findOrFail($id);
        PackagePlan::create([
            'target' => $request->input('target'),
            'amount' => $request->input('price'),
            'package_id' => $package->id
        ]);
        return back()->with('success', 'Package plan has been added');
    }

    public function deletePackagePlan(Request $request)
    {
        $this->validate($request, [
            'package_id' => 'required',
        ]);
        PackagePlan::where('id', $request->input('package_id'))->delete();

        return back()->with('success', 'Package plan has been deleted');
    }

    public function processWithdrawal(Request $request)
    {
        $this->validate($request, [
            'w_id' => 'required',
            'status' => 'required',
        ]);
        Withdrawal::where('id', $request->input('w_id'))->update(['status' => $request->input('status')]);
        return back()->with('success', 'Withdrawal status has been updated');
    }



    public function userInfo($id)
    {
        $user = User::findOrFail($id);
        $commission = Commission::where('user_id', $user->id)->sum('amount');
        $totalWithdraw = Withdrawal::where('user_id', $user->id)->whereNot('status', 'rejected')->sum('amount');
        $withdrawals = Withdrawal::where('user_id', $user->id)->orderBy('created_at', 'DESC')->get();
        $balance = abs($commission - $totalWithdraw);
        return view('admin.user_profile', compact('user', 'balance', 'withdrawals'));
    }

    public function showLogin()
    {
        return view('auth.admin-login');
    }

    public function authenticate(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (auth('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            $user = auth()->guard('admin')->user();
            // Session::put('success', 'You are Login successfully!!');
            return redirect()->route('admin.dashboard');
        } else {
            return back()->with('error', 'your email or password is incorrect.');
        }
    }

    /**
     * Show the application logout.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        auth()->guard('admin')->logout();
        session()->flush();
        return redirect()->route('admin.login')->with('success', 'You are now logged out');
    }
}
