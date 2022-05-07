<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm(Request $request)
    {
        // if ($request->has('ref')) {
        //     session(['referrer' => $request->query('ref')]);
        // }

        return view('auth.signup');
    }

    public function createAccount(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'unique:users', 'alpha_dash', 'min:3', 'max:30'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        

        $data = $validator->validated();

        $referrer = User::whereUsername(session()->pull('referrer'))->first();

        User::create([
            'name'        => $data['name'],
            'username'    => $data['username'],
            'email'       => $data['email'],
            'referrer_id' => $referrer ? $referrer->id : null,
            'password'    => Hash::make($data['password']),
        ]);
        return redirect()->route('login')->with('login_success', 'Account has been created sucessfully, please login');
    }
}
