<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
class AddMember extends Controller
{
    //
    function adding(Request $req)
    {
        $listing = new Listing;     
        $listing->company=$req->company;
        $listing->location=$req->location;
        $listing->description=$req->description;
        $listing->email=$req->email;
        $listing->title=$req->title;
        $listing->website="www.ebay.com";
        $listing->tags="Python, Ruby C++, C#";
        $listing->save();
    }

}
