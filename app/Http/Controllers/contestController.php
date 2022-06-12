<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contest;
use App\Models\Category;
use App\Models\Submitted_proof;
use App\Models\Charge;
use Illuminate\Support\Facades\Auth;
use App\Models\Deposit;
use App\Models\Withdraw;

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
        $user_id = $req->user()->id;
        $balance= Deposit::where('user_id',$user_id)
                    ->where('status',1)
                    ->get();
        $withdraw= Withdraw::where('user_id',$user_id)
                    ->where('completed',1)
                    ->get();
        $categoryList = Category::all();
        $costing = Charge::where('id',5)->first();
        return view('createContest', ['categorylist'=> $categoryList])
        ->with('costing',$costing)
        ->with('balance',$balance)
        ->with('withdraw',$withdraw);
    }

    function addData(Request $req)
    {
        $req->validate([
            'title'=>'required | min:3',
            'agreement'=>'required'
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

        $totalCost = $req->input('prize') + $req->input('cost');

        $spent=User::find($req->user()->id);
        $spent->spent+=$totalCost;
        $spent->update();

        if($req->file('file')){
             $lastId = $contest->id;

        $pictureInfo = $req->file('file');

        $picName = $pictureInfo->getClientOriginalName();

        $folder = "contestImg";

        $pictureInfo->move($folder, $picName);

        $picUrl = $folder .'/'. $picName;

        $staffPic = Contest::find($lastId);

        $staffPic->feature_image = $picUrl;
        $staffPic->save();
        }
        
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
            'title'=>'required | min:3'
        ]);
        
        $contest_id = $req->input('contest_id');
        $contest=Contest::where('id', $contest_id)
       ->update([
           'contest_name' => $req->input('title'),
           'description' => $req->input('description'),
           'category_id' => $req->input('category'),
           'due_date' => $req->input('due_date'),
           'result_date' => $req->input('result_date')
        ]);

        if(null!==$req->file('file')){
            $lastId = $gig_id;

        $pictureInfo = $req->file('file');

        $picName = $pictureInfo->getClientOriginalName();

        $folder = "contestsImg";

        $pictureInfo->move($folder, $picName);

        $picUrl = $folder .'/'. $picName;

        $staffPic = Contest::find($lastId);

        $staffPic->feature_image = $picUrl;
        $staffPic->save();
        }
        $req->session()->flash('status','Contest edited successfully');
        return redirect('my-contests');

    
    }

    function approveContest($proof_slug)
    {
        $approve=Submitted_proof::where('id', $proof_slug)
        ->update([
           'status' => 1
        ]);
        $reject=Submitted_proof::where('id','!=', $proof_slug)
        ->update([
           'status' => 2
        ]);

        $userID = Submitted_proof::where('id', $proof_slug)
                        ->get(['user_id'])->first();
        $jobAvailability = Submitted_proof::where('id', $proof_slug)
                        ->get(['job_id'])->first();
        // $jobUpdate = Contest::where('id',$jobAvailability['job_id'])
        // ->update([
        //         'total_approved'=> DB::raw('total_approved+1'), 
        //         'due_availability' => DB::raw('due_availability-1')
        //         ]);

        //add payment to user
        $jobPrice=Contest::where('id',$jobAvailability['job_id'])
        ->get('prize_money')->first();
        
        $submitted_user=$userID['user_id'];
        $jobPriceSingle = $jobPrice['prize_money'];
        
        if($submitted_user!=null){
            $earned=User::find($submitted_user);
            $earned->earned+=$jobPriceSingle;
            $earned->update();
        }
        

        // $req = new Request;
        // $req->session()->flash('status','Job approved successfully');
        return redirect()->back();
    }
    function rejectContest($proof_slug)
    {
        $approve=Submitted_proof::where('id', $proof_slug)
        ->update([
           'status' => 2
        ]);
        // $req = new Request;
        // $req->session()->flash('status','Job approved successfully');
        return back();
    }

    function mistakeApproveContest($proof_slug)  //if approved by mistake
    {
        $approve=Submitted_proof::where('id', $proof_slug)
        ->update([
           'status' => 2
        ]);
        $recover=Submitted_proof::where('id','!=', $proof_slug)
        ->update([
           'status' => 0
        ]);
        
        $userID = Submitted_proof::where('id', $proof_slug)
                        ->get(['user_id'])->first();
        $jobAvailability = Submitted_proof::where('id', $proof_slug)
                        ->get(['job_id'])->first();
        
        //add payment to user
        $jobPrice=Contest::where('id',$jobAvailability['job_id'])
        ->get('prize_money')->first();
        
        $submitted_user=$userID['user_id'];
        $jobPriceSingle = $jobPrice['prize_money'];
        
        if($submitted_user!=null){
            $earned=User::find($submitted_user);
            $earned->earned-=$jobPriceSingle;
            $earned->update();
        }
        return back();
    }

}