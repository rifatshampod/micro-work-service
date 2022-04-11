<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Contest;

class contestController extends Controller
{
    function getData()
    {
        $contestList = Contest::paginate(10);
        return view('allContests', ['contestlist' => $contestList]);
    }
}