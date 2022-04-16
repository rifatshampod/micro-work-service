<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\careerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\jobsDetail;
use App\Http\Controllers\usersController;
use App\Http\Controllers\gigsController;
use App\Http\Controllers\paymentProofController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\contestController;

Route::get('home', function () {
    //return view('home');
    return redirect('/'); //to redirect to a page

});

Route::view("about", 'about');
//Route::view("faq", 'faq');
Route::view("help", 'home'); //need to make help page
Route::view("terms-of-services", 'terms');
Route::view("privacy-policy", 'privacy');
Route::view("refund-policy", 'terms'); //need to add condition
Route::view("career", 'career');
Route::view("login", 'signIn');
Route::view("signup", 'signUp');
Route::view("support", 'support');
Route::view("profile", 'profile');

Route::get('job-details', function () {
    return redirect('jobs'); //to redirect to all job page
});
Route::get('gig-details', function () {
    return redirect('gigs'); //to redirect to all gig page
});
Route::get('contest-details', function () {
    return redirect('contests'); //to redirect to all gig page
});

//view routes end ----------------------------------------------


// controller routes start--------------------------------------


Route::get("/", [HomeController::class, 'getData']); //retrieve all jobs from database

Route::post("career", [careerController::class, 'getData']);  //controller to get html form data in career page
Route::get("jobs", [jobsDetail::class, 'getData']); //retrieve all jobs from database
Route::get("job-details={job_slug}", [jobsDetail::class, 'getSingleData']);  //retrieve and show single job
Route::get("gigs", [gigsController::class, 'getData']);
Route::get("gig-details={gig_slug}", [gigsController::class, 'getSingleData']);
Route::get("contests", [contestController::class, 'getData']);
Route::get("contest-details={contest_slug}", [contestController::class, 'getSingleData']);  //retrieve and show single job
Route::get("payment-proof", [paymentProofController::class, 'getData']);
// Route::view('contests','allContests');




//Logged in route list -----------------------------------------------------------


//job
Route::get("add-job", [jobsDetail::class, 'showCategoryData']);  //add job input form
Route::post("addJob", [jobsDetail::class, 'addData']); //save data in database
Route::post("submit-proof", [jobsDetail::class,'submitProof']);
//gigs
Route::get("add-gig", [gigsController::class, 'showCategoryData']);  //add gig input form
Route::post("addGig", [gigsController::class, 'addData']); //save data in database
//contests
Route::get("add-contest", [contestController::class, 'showCategoryData']);  //add gig input form
Route::post("addContest", [contestController::class, 'addData']); //save data in database
//campaign
Route::get("add-campaign", [jobsDetail::class, 'showCampaignData']);  //add job input form
Route::post("addCampaign", [jobsDetail::class, 'addCampaignData']); //save data in database

//user 

//job
Route::get("my-jobs", [jobsDetail::class, 'userJobs']);
Route::view('my-single-job','usernav/mySingleJob'); //user single job model
Route::get("my-single-job={job_slug}", [jobsDetail::class, 'userJobSingle']);
Route::get('applied-jobs',[jobsDetail::class, 'userAppliedJobs']);

//contest
Route::get('my-contests',[contestController::class, 'userContests']);
Route::get('applied-contests',[contestController::class, 'userAppliedContests']);
Route::get("my-contest={contest_slug}", [contestController::class, 'userSingleData']);  //retrieve and show single job

//campaign
Route::get('my-campaigns',[jobsDetail::class, 'userCampaign']);

//gigs
Route::get('my-gigs',[gigsController::class,'getUserData']);