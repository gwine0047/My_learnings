<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
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



Route::get("users/{new}", [Users::class, 'index']);

Route::view('users', 'Users');

Route::view('abt', 'about');
// The getData function is created in the controller and is called here in the web in the users route. So when we visit /users, getData is activated
// login route view whatever is in the Users.blade.php
//Route::view('routeName', 'Route page(.blade.php)')
Route::post('users', [Users::class, 'getData']);
Route::view("login", "Users");

Route::view("home", "home");
Route::view("noaccess", "noAccess");
Route::view("users", "Users")->middleware('protectedPage');