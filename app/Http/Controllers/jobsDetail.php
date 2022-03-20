<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Job;

class jobsDetail extends Controller
{
    function index()
    {
        $jobList =  DB::select('select * from jobs');
        return view('allJob',['joblist'=>$joblist]);
    }

    function getData()
    {
        $jobList= Job::paginate(10); //pagination and default data to show
        return view('allJob', ['joblist' => $jobList]);
    }
}
