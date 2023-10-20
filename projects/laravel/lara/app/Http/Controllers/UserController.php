<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    //
    function index() 
    {
        // // return "API data here";
        // $collection = Http::get('https://reqres.in/api/users?pages=1');
        // return view('users', ['collection'=>$collection['data']]);


    }

    function testRequest(Request $req) //Request method is used to get data from a form
    {
        return $req->input();
    }
}
