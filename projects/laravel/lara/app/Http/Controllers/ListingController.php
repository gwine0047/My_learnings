<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
class ListingController extends Controller
{
    //
    function getData()
    {
        return Listing::all();
    }
}
