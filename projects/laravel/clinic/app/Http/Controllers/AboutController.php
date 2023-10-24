<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function aboutView()
    {
        return view('user.about');
    }
}
