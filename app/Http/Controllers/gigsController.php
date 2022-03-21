<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Gig;



class gigsController extends Controller
{
    function getData()
    {
        $gigList = Gig::paginate(10);
        return view('allGig', ['giglist' => $gigList]);
    }

}
