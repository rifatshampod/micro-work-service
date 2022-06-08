<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('user', 'UserCrudController');
    Route::crud('job', 'JobCrudController');
    Route::crud('gig', 'GigCrudController');
    Route::crud('contest', 'ContestCrudController');
    Route::crud('campaign', 'CampaignCrudController');
    Route::crud('category', 'CategoryCrudController');
    Route::crud('career', 'CareerCrudController');
    Route::crud('submitted-proof', 'SubmittedProofCrudController');
    Route::crud('charge', 'ChargeCrudController');
    Route::crud('news-scroll', 'NewsScrollCrudController');
    Route::crud('contact', 'ContactCrudController');
    Route::crud('deposit', 'DepositCrudController');
    Route::crud('withdraw', 'WithdrawCrudController');
}); // this should be the absolute last line of this file