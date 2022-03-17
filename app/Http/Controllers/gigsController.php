<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Gig;



class gigsController extends Controller
{
    function getData()
{
    $gigList = Gig::all();
    return view('allGig', ['giglist' => $gigList]);
}

}
