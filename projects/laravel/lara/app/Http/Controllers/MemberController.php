<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class MemberController extends Controller
{
    //
    function show()
    {
        $data=Listing::all();
        return view('list', ['members'=>$data]);
    }

    function delete($id)
    {
        $data=Listing::find($id);
        $data->delete();
        return redirect('list');
    }

    function edit($id)
    {
        $data=Listing::find($id);
        return view('edit', ['data'=>$data]);
    }
    function update(Request $req)
    {
        $data = Listing::find($req->id);
        $data->company=$req->company;
        $data->email=$req->email;
        $data->location=$req->location;
        $data->title=$req->title;
        $data->description=$req->description;
        $data->save();
        return redirect('list');
    }
}
