<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Members extends Controller
{
    //
    function useData()
    {
        return DB::table('listings')
        ->insert(
            [
                'company'=> 'Microsoft',
                'email'=>'godwinkelvin@microsoft.org',
                'title'=>'Head of Communications',
                'tags'=>'Powershell',
                'location'=>'Brussels',
                'website'=>'www.microsoft.com',
                'description'=>'Head overall'

            ]
            );
    }
}
