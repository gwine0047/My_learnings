<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HowController extends Controller
{
    //
    public function howView()
    {
        return view('user.how');
    }
}
