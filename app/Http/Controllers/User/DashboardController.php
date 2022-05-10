<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AccountPlan;
use App\Models\Commission;
use App\Models\FundedAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;


class DashboardController extends Controller
{
    public function showDashboard(Request $request)
    {
        $user = Auth::user();
        $sum = Commission::where('user_id', $user->id)->sum('amount');
        // dd($sum);
        return view('user.dashboard', compact('user', 'sum'));
    }

    public function showsubscriptions(Request $req)
    {
        $plans = FundedAccount::accounts;
        return view('user.plans', compact('plans'));
    }

    public function payForsubscription(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'plan_name' => ['required', 'string'],
                'plan_fee' => ['required', 'string'],
                'plan_type' => ['required', 'string'],
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', 'Unable to process payment');
                // return redirect()->back()->withErrors($validator)->withInput();
            }
            $data = $validator->validated();

            $user = Auth::user();
            $url = "https://api.lazerpay.engineering/api/v1/transaction/initialize";
            //send a request to refund endpoint
            $response = Http::withHeaders([
                'content-type' => 'application/json',
                'x-api-key' => "pk_test_rfLaQLr2DF7MhijkqeRiLksyFxGHCs8JBqvcpy3ftEGbq3YFTV"
            ])->post($url, [
                'customer_name' => $user->name, 'customer_email' => $user->email,
                'coin' => "BUSD", 'currency' => "USD",
                'amount' => $data['plan_fee']
            ]);
            $result = $response->json();
            if ($result['status'] === 'success') {
                $response = $result['data'];
                $response['plan_name'] = $data['plan_name'];
                $response['plan_fee'] = $data['plan_fee'];
                $response['plan_type'] = $data['plan_type'];

                AccountPlan::create([
                    'account_type' => $data['plan_type'],
                    'target_amount' => $data['plan_name'],
                    'amount' => $data['plan_fee'],
                    'paid' => 0,
                    'user_id' => $user->id,
                    'reference' => $result['data']['reference']
                ]);

                return view('user.payment_page', compact('response'));
            } else {
                return redirect()->back()->with('error', $result['message']);
            }
            // dd($response->json());
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with('error', 'Payment processing failed, try again');
        }
    }

    public function verifyPayment(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'reference' => ['required', 'string'],
                'plan_fee' => ['required', 'string'],
                'plan_type' => ['required', 'string'],
                'plan_name' => ['required', 'string'],
            ]);

            if ($validator->fails()) {
                return redirect()->route('dashboard.sub')->with('error', 'Unable to process payment');
                // return redirect()->back()->withErrors($validator)->withInput();
            }
            $data = $validator->validated();

            // $user = Auth::user();
            $url = "https://api.lazerpay.engineering/api/v1/transaction/verify/{$data['reference']}";
            // dd($url);
            //send a request to refund endpoint
            $response = Http::withHeaders([
                'content-type' => 'application/json',
                'x-api-key' => "pk_test_rfLaQLr2DF7MhijkqeRiLksyFxGHCs8JBqvcpy3ftEGbq3YFTV"
            ])->get($url);
            $dd = $response->json();
            // dd($data);
            if ($dd['status'] === 'success') {
                AccountPlan::where('reference', $dd['data']['reference'])->update(['paid' => 1]);
                // $acc->paid = 1;
                // $acc->save();
                return redirect()->route('dashboard.sub')->with('success', 'Payment succcessful, subscription created');
            } else {
                return redirect()->route('dashboard.sub')->with('error', $dd['message']);
            }
            // $response = $data['data'];
            // dd($data);
            // return view('user.payment_page', compact('response'));
            // dd($response->json());
        } catch (\Exception $e) {
            dd($e);
            return redirect()->route('dashboard.sub')->with('error', 'Payment processing failed, contact support.');
        }
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect('/account/login')->with('login_success', 'User has been logged out!');
    }
}
