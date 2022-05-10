<?php

namespace App\Http\Controllers;

use App\Models\AccountPlan;
use App\Models\Commission;
use App\Models\User;
use Illuminate\Http\Request;

class AccountPlanController extends Controller
{
    public function verifyPayment(Request $request)
    {
        try {
            $data = $request->only(['reference', 'status', 'fiatAmount', 'amountReceivedFiat', 'customer']);
            if ($data['amountReceivedFiat'] >= $data['fiatAmount']) {
                $user = User::whereEmail($data['customer']['customerEmail'])->first();
                AccountPlan::where('reference', $data['reference'])->update(['status' => $data['status']]);
                $amount = $data['fiatAmount'] * 0.1;
                if ($user && $user->referrer_id) {
                    Commission::create([
                        'account_type' => 'none',
                        'user_id' => $user->referrer_id,
                        'ref_id' => $user->id,
                        'amount' => $amount
                    ]);
                }
            }
            return response()->json();
        } catch (\Exception $e) {
            return response()->json([], 400);
        }
    }
}
