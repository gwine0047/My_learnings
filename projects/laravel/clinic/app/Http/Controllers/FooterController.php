<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterController extends Controller
{
    //
    public function footerView()
    {
        return view('user.footer');
    }
}
