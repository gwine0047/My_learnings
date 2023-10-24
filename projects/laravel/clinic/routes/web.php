<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HowController;
use App\Http\Controllers\InvestController;
use App\Http\Controllers\AdminController;
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


Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect']);

Route::view('/about', 'user/about');
Route::view('/invest', 'user/invest');
Route::post('invest', [InvestController::class, 'upload']);

Route::get('/footer', [FooterController::class, 'footerView']);
Route::get('/about', [AboutController::class, 'aboutView']);

Route::get('/invest', [InvestController::class, 'investView']);


Route::get('/how', [HowController::class, 'howView']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::post('/update_user', [AdminController::class, 'saveData']);

