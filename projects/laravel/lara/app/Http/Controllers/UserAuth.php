<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    //
    function userLogin(Request $req)
    {
        $data = $req->input();
        $req->session()->put('user', $data['user']);
        //session is a method that puts the user from the data we get in a key also calleld user(first)

        return redirect('profile');
    }
}
