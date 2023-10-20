<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\AddMember;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\Members;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// set language
// Route::get('/profile/{lang}', function ($lang) {
//     App::setlocale($lang);
//     return view('profile');
// });

Route::get('data', [ListingController::class, 'getData']);

Route::view("login", 'login');
route::POST('user', [UserController::class, 'testRequest']);
route::POST('user', [UserAuth::class, 'userLogin']);

Route::view('upload', 'upload');
Route::POST('upload', [UploadController::class, 'index']);


//THE BELOW SHOULD HAVE ITS OWN CONTROLLER
Route::get('/login', function () {
    if(session()->has('user'))
    {
        return redirect('profile');
    }
    return view('login');
});

Route::get('/logout', function () {
    if(session()->has('user'))
    {
        session()->pull('user');
    }
    return redirect('login');
});


Route::view('add', 'add');
Route::post('add', [AddMember::class, 'adding']);

Route::get('list', [MemberController::class, 'show']);
Route::get('delete/{id}', [MemberController::class, 'delete']);
Route::get('edit/{id}', [MemberController::class, 'edit']);
Route::post('edit', [MemberController::class, 'update']);

Route::get('edits', [Members::class, 'useData']);