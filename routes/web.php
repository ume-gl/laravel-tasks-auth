<?php

use Illuminate\Support\Facades\Route;
use App\Mail\SuccessEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Listeners\SendSuccessListener;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/email', function () {
    Mail::to('sidrawazir345@gmail.com')->send(new SuccessEmail());
    return new SuccessEmail();
});

