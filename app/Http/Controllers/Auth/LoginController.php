<?php

namespace App\Http\Controllers\Auth;

// use Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showLoginForm(Request $request)
    {
        // if ($request->has('ref')) {
        //     session(['referrer' => $request->query('ref')]);
        // }

        return view('auth.login');
    }

    public function loginUser(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/dashboard');
        }
        session()->flash('err', 'Email or password is incorrect');
        return back()->withInput($request->only('email'));
        // return redirect()->back();
    }
}
