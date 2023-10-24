<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserTransaction;

class InvestController extends Controller
{
    //
    public function investView(Request $request)
    {
        $user = auth()->user();
        if ($user)
        {
            $email = $user->email;
            $data = UserTransaction::where('email', $email)->first();
            if ($data)
            {
                return view('user.invest')->with('users', $data);
            }
            else{
                return view('/user.investnone');
            }
        }
    }
    public function upload(Request $req)
    {
        if ($req->hasFile('file'))
        {
            $path = $req->file('file')->store('uploads');

            return redirect()->back()->with('success', 'File uploaded successfully.');
        }
    }
}
