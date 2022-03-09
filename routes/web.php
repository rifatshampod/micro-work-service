<?php

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
    return view('home');
    //return redirect('welcome'); //to redirect to a page

});

Route::view("index",'home');
Route::view("about", 'about');

// short route syntax, 1st parameter URL, second parameter page name in blade template

