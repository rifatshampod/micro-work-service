<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Job;

class jobsDetail extends Controller
{
    function index()
    {
        return DB::select('select * from jobs');
    }

    function getData()
    {
        return Job::all();
    }
}
