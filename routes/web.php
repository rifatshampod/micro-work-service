<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\careerController;
use App\Http\Controllers\jobsDetail;
use App\Http\Controllers\usersController;
use App\Http\Controllers\gigsController;
use App\Http\Controllers\paymentProofController;





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
Route::view("help", 'home'); //need to make help page
Route::view("terms-of-services", 'terms');
//Route::view("support", 'contact');
Route::view("privacy-policy", 'privacy');
Route::view("refund-policy", 'terms'); //need to add condition
Route::view("career", 'career');
Route::view("login", 'signIn');
Route::view("signup", 'signUp');
Route::view("support", 'support');
Route::view("profile", 'profile');
Route::view("job-details", 'singleJob');
//Route::view("add-job", 'createJob');
Route::view("add-gig", 'createGig1');
//Route::view("gig-details", 'singleGig');
Route::get('gig-details', function () {
    //return view('home');
    return redirect('gigs'); //to redirect to a page

});

//view routes end ----------------------------------------------


// controller routes start--------------------------------------


Route::post("career", [careerController::class, 'getData']);  //controller to get html form data in career page

//job
Route::get("add-job", [jobsDetail::class, 'showCategoryData']);  //add job input form
Route::post("addJob", [jobsDetail::class, 'addData']); //save data in database
Route::get("jobs", [jobsDetail::class, 'getData']); //retrieve all jobs from database
Route::get("job-details={job_slug}", [jobsDetail::class, 'getSingleData']);  //retrieve and show single job

//gigs
Route::get("gigs", [gigsController::class, 'getData']);
Route::get("gig-details={gig_slug}", [gigsController::class, 'getSingleData']);


Route::get("payment-proof", [paymentProofController::class, 'getData']);










