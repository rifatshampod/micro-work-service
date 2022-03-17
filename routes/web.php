<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\careerController;
use App\Http\Controllers\jobsDetail;
use App\Http\Controllers\usersController;



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

// view routes start -----------------------------------------------------

Route::get('/', function () {
    return view('home');
    //return redirect('welcome'); //to redirect to a page

});

//Route::view("index",'home');
Route::get('home', function () {
    //return view('home');
    return redirect('/'); //to redirect to a page

});
// short route syntax, 1st parameter URL, second parameter page name in blade template

Route::view("about", 'about');
//Route::view("faq", 'faq');
Route::view("payment-proof", 'paymentHistory');
Route::view("jobs", 'allJob');
Route::view("gigs", 'allGig');
Route::view("help", 'home'); //need to make help page
Route::view("terms-of-services", 'terms');
//Route::view("support", 'contact');
Route::view("privacy-policy", 'privacy');
Route::view("refund-policy", 'terms'); //need to add condition
Route::view("career", 'career');
Route::view("login", 'signIn');
Route::view("signup", 'signUp');

//view routes end ----------------------------------------------

// controller routes start--------------------------------------

//controller to get html form data in career page
Route::post("career", [careerController::class, 'getData']); 
Route::get("job", [jobsDetail::class, 'getData']);
Route::get("job", [jobsDetail::class, 'getData']);
Route::get("client", [usersController::class, 'index']); //api based http client example


