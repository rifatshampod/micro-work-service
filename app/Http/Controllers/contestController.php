<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Contest;
use App\Models\Category;

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

    function showCategoryData(Request $req)
    {
        $categoryList = Category::all();
        return view('createContest', ['categorylist'=> $categoryList]);
    }

    function addData(Request $req)
    {
        $req->validate([
            'title'=>'required | min:3',
            'agreement'=>'required',
            'file'=>'required'  
        ]);
        
        $contest = new Contest;
        $contest->user_id = 1;
        $contest->contest_name = $req->input('title');
        //$contest->feature_image = $req->input('feature_img');
        $contest->category_id=$req->input('category');
        $contest->description=$req->input('description');
        $contest->due_date=$req->input('dueDate');
        $contest->result_date=$req->input('resultDate');
        $contest->prize_money =$req->input('prize');
        $contest->posting_cost =$req->input('cost');
        $contest->time_started =date("Y-m-d H:i:s", strtotime('now'));
        $contest->save();

        $lastId = $contest->id;

        $pictureInfo = $req->file('file');

        $picName = $pictureInfo->getClientOriginalName();

        $folder = "contestImg";

        $pictureInfo->move($folder, $picName);

        $picUrl = $folder .'/'. $picName;

        $staffPic = Contest::find($lastId);

        $staffPic->feature_image = $picUrl;
        $staffPic->save();
        
        $req->session()->flash('status','New contest added successfully');
        return redirect('contests');

    
    }
}