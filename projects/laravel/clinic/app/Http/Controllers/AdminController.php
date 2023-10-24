<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserTransaction;

class AdminController extends Controller
{
    //
    public function saveData(Request $request)
    {
        $userTransaction = new UserTransaction;
        $userTransaction->email = $request->email;
        $userTransaction->deposit = $request->deposit;
        $userTransaction->interest = $request->interest;
        $userTransaction->total_I = $request->total_I;
        $userTransaction->total_D = $request->total_D;
        $userTransaction->total_W = $request->total_W;
        $userTransaction->referral = $request->referral;
        $userTransaction->save();

        return redirect()->back();
    }
}
