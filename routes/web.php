<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\careerController;
use App\Http\Controllers\jobsDetail;
use App\Http\Controllers\usersController;
use App\Http\Controllers\gigsController;
use App\Http\Controllers\paymentProofController;
use App\Http\Controllers\LogoutController;






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
//Route::view("payment-proof", 'paymentHistory');
//Route::view("jobs", 'allJob');
//Route::view("gigs", 'allGig');
Route::view("help", 'home'); //need to make help page
Route::view("terms-of-services", 'terms');
//Route::view("support", 'contact');
Route::view("privacy-policy", 'privacy');
Route::view("refund-policy", 'terms'); //need to add condition
Route::view("career", 'career');
//Route::view("login", 'signIn');
//Route::view("signup", 'signUp');
Route::view("profile", 'profile');


//view routes end ----------------------------------------------

// controller routes start--------------------------------------


Route::post("career", [careerController::class, 'getData']);  //controller to get html form data in career page

Route::get("jobs", [jobsDetail::class, 'getData']);
Route::get("gigs", [gigsController::class, 'getData']);
Route::get("payment-proof", [paymentProofController::class, 'getData']);
Route::get("client", [usersController::class, 'index']); //api based http client example

//single job
Route::view('single-job','singleJob');
Route::get('single-job={job_slug}', [jobsDetail::class, 'jobView']);












Route::post("userAuth", [usersController::class, 'signin']); //--
Route::get('logout', function () {
    //return view('home');
    if(session()->has('user')){
        session()->pull('user');
    }
    return redirect('/'); //to redirect to a page

});

// Route::get('login', function () {
//     //return view('home');
//     if (session()->has('user')) {
//         return redirect('profile');

//     }
//     return view('signIn'); //to redirect to a page

// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/logout', [LogoutController::class, 'logout_user'])->name('logout');


