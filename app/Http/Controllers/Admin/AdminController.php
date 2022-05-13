<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard()
    {
        $user = auth()->guard('admin')->user();
        return view('admin.dashboard', compact('user'));
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
