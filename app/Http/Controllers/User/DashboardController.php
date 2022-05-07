<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function showDashboard(Request $request)
    {
        // if ($request->has('ref')) {
        //     session(['referrer' => $request->query('ref')]);
        // }
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect('/account/login')->with('login_success', 'User has been logged out!');
    }
}
