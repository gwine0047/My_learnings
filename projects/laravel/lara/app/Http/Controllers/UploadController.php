<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    function index(Request $req)
    {
        return $req->file('docs')->store('document');
    }
}
