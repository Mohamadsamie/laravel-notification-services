<?php

use App\Mail\TopicCreated;
use App\Mail\UserRegistered;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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

Route::get('/email', function () {
    Mail::to("mohamad.samieshad@gmail.com")->send(new TopicCreated);
}); //route without markdown

Route::get('/email-m', function () {
    Mail::to("mohamad.samieshad@gmail.com")->send(new UserRegistered);
}); //route with markdown
