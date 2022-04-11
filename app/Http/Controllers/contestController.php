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

    function getSingleData($contest_slug)
    {
        if(Contest::where('id',$contest_slug)->exists())
        {
            //$clients = Client::where('id',$client_slug)->first();
            $contests = Contest::join('categories', 'categories.id', '=', 'contests.category_id')
            ->get(['contests.id as id','contests.contest_name as title', 'categories.name as category_name',
            'contests.description','contests.due_date as completion', 'contests.feature_image',
            'contests.result_date', 'contests.prize_money'])
            ->where('id',$contest_slug)->first();

            return view('singleContest')->with('contests',$contests);
        }
        else{

            return redirect('/')->with('status',"The link is broken");
        }
    }
}