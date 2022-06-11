<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Contest;
use App\Models\Category;
use App\Models\Submitted_proof;
use App\Models\Charge;
use Illuminate\Support\Facades\Auth;

class contestController extends Controller
{
    function getData()
    {
        $categoryList = Category::all();
        $contestList = Contest::paginate(10);
        return view('allContests', ['contestlist' => $contestList])->with('categorylist',$categoryList);
    }
    
    function getCategoryData($contest_slug)
    {
        $categoryList = Category::all();
        $contestList = Contest::where('contests.category_id',$contest_slug)
        ->paginate(10);
        return view('allContests', ['contestlist' => $contestList])->with('categorylist',$categoryList);
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
        $costing = Charge::where('id',5)->first();
        return view('createContest', ['categorylist'=> $categoryList])->with('costing',$costing);
    }

    function addData(Request $req)
    {
        $req->validate([
            'title'=>'required | min:3',
            'agreement'=>'required',
            'file'=>'required'  
        ]);
        
        $contest = new Contest;
        $contest->user_id = $req->user()->id; //change user id here
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

    function userContests(Request $req){
        $userid = $req->user()->id; //change user id here
        $contestList = Contest::where('user_id', $userid)
        ->paginate(10);
        return view('usernav/myCreateContest', ['contestlist' => $contestList]);
    }

    function userSingleData($contest_slug)
    {
        if(Contest::where('id',$contest_slug)->exists())
        {
            //$clients = Client::where('id',$client_slug)->first();
            $contests = Contest::join('categories', 'categories.id', '=', 'contests.category_id')
            ->get(['contests.id as id','contests.contest_name as title', 'categories.name as category_name',
            'contests.description','contests.due_date as completion', 'contests.feature_image',
            'contests.result_date', 'contests.prize_money'])
            ->where('id',$contest_slug)->first();

            $submission = Submitted_proof::join('contests','contests.id','=','submitted_proofs.job_id')
            ->join('users','users.id','=','submitted_proofs.user_id')
            ->get(['submitted_proofs.id as id','submitted_proofs.job_id', 'submitted_proofs.description as details', 
            'users.name as username','submitted_proofs.file as attachment',
            'submitted_proofs.status as approval','submitted_proofs.type'])
            ->where('job_id',$contest_slug)
            ->where('type',2);

            return view('usernav/mySingleContest',compact('submission'))->with('contests',$contests);
        }
        else{

            return redirect('/')->with('status',"The link is broken");
        }
    }

    function userAppliedContests(Request $req){
        $user_id=$req->user()->id; //change user id here

        $submission = Submitted_proof::join('contests','contests.id','=','submitted_proofs.job_id')
            ->get(['submitted_proofs.id as id','submitted_proofs.job_id',
            'contests.contest_name as title','submitted_proofs.file as attachment',
            'contests.due_date as deadline','contests.prize_money', 'submitted_proofs.status',
            'submitted_proofs.user_id as submitted_user','submitted_proofs.type','contests.id as contestId'])
            ->where('submitted_user',$user_id)
            ->where('type',2);  //contest type submission is 2

        return view('usernav/myAppliedContest', ['submission' => $submission]);
    }

    //contest edit input field function
    function editUserData($contest_slug)
    {
        $user_id = Auth::id(); //change user id here
        if(Contest::where('id',$contest_slug)->where('user_id',$user_id)->exists())
        {
            //$clients = Client::where('id',$client_slug)->first();
            $contests = Contest::join('categories', 'categories.id', '=', 'contests.category_id')
            ->join('users','users.id','=','contests.user_id')
            ->get(['contests.id as id','contests.contest_name as title','users.name as user_name',
            'categories.name as category_name',
            'contests.description','contests.due_date','contests.result_date','contests.feature_image'])
            ->where('id',$contest_slug)->first();

            $categorylist = Category::all();

            return view('editContest',compact('categorylist'))->with('contests',$contests);
        }
        else{

            return redirect('my-contests')->with('status',"The link you have given doesn't have permission");
        }
    }

    //function to update contest in database
    function updateUserData(Request $req)
    {
        $req->validate([
            'title'=>'required | min:3',
            'agreement'=>'required'
        ]);
        
        // $gig = new Gig;
        // $gig->user_id = 1;
        // $gig->title = $req->input('title');
        // //$gig->feature_image = $req->input('feature_img');
        // $gig->category_id=$req->input('category');
        // $gig->description=$req->input('description');
        // $gig->features=$req->input('feature');
        // $gig->speciality =$req->input('speciality');
        // $gig->duration=$req->input('duration');
        // $gig->price =$req->input('price');
        // $gig->posting_cost =$req->input('cost');
        // $gig->time_started =date("Y-m-d H:i:s", strtotime('now'));
        // $gig->save();
        $gig_id = $req->input('gig_id');
        $gig=Gig::where('id', $gig_id)
       ->update([
           'title' => $req->input('title'),
           'description' => $req->input('description'),
           'features' => $req->input('feature'),
           'category_id' => $req->input('category'),
           'price' => $req->input('price')
        ]);

        if(null!==$req->file('file')){
            $lastId = $gig_id;

        $pictureInfo = $req->file('file');

        $picName = $pictureInfo->getClientOriginalName();

        $folder = "gigsImg";

        $pictureInfo->move($folder, $picName);

        $picUrl = $folder .'/'. $picName;

        $staffPic = Gig::find($lastId);

        $staffPic->feature_image = $picUrl;
        $staffPic->save();
        }
        $req->session()->flash('status','Gig edited successfully');
        return redirect('my-contests');

    
    }

}