<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Job;
use App\Models\Category;
use App\Models\Campaign; 
use App\Models\Submitted_proof;
use App\Models\Usertable;

class jobsDetail extends Controller
{
    function index()
    {
        $jobList =  DB::select('select * from jobs');
        return view('allJob',['joblist'=>$joblist]);
    }

    function showCategoryData(Request $req)
    {
        $categoryList = Category::all();
        return view('createJob', ['categorylist'=> $categoryList]);
    }

    function addData(Request $req)
    {
        $req->validate([
            'title'=>'required | min:3',
            'price'=>'required',
            'availability'=>'required',
            'agreement'=>'required'  
        ]);
        
        $job = new Job;
        $job->user_id = 1;
        $job->name = $req->input('title');
        $job->category_id=$req->input('category');
        $job->description=$req->input('description');
        $job->requirement=$req->input('requirement');
        $job->target =$req->input('target');
        $job->completion=$req->input('dueTime');
        $job->availability =$req->input('availability');
        $job->due_availability =$req->input('availability');
        $job->price =$req->input('price');
        $job->campaign_cost =$req->input('cost');
        $job->total_cost =$req->input('totalCost');
        $job->save();
        
        $req->session()->flash('status','New job added successfully');
        return redirect('jobs');

    
    }

    function getData()
    {
        $jobList= Job::orderBy('featured', 'DESC')
        ->paginate(20); //pagination and default data to show
        

        return view('allJob', ['joblist' => $jobList]);
    }

    function getSingleData($job_slug)
    {
        if(Job::where('id',$job_slug)->exists())
        {
            //$clients = Client::where('id',$client_slug)->first();
            $jobs = Job::join('categories', 'categories.id', '=', 'jobs.category_id')
            ->get(['jobs.id as id','jobs.name as title', 'categories.name as category_name',
            'jobs.description','jobs.requirement','jobs.target','jobs.completion',
            'jobs.availability', 'jobs.price'])
            ->where('id',$job_slug)->first();

            $proofs = Submitted_proof::where('job_id',$job_slug)
                    ->where('status',1)
                    ->get();

            return view('singleJob',compact('proofs'))->with('jobs',$jobs);
        }
        else{

            return redirect('/')->with('status',"The link is broken");
        }
    }
    //     function jobView($job_slug)  //to display single job page
    // {
    //     if (Client::where('id', $client_slug)->exists()) {
    //         $clients = Client::where('id', $client_slug)->first();
    //         $projects = $data = Project::join('clients', 'clients.id', '=', 'projects.client_id')
    //         // ->join('city', 'city.state_id', '=', 'state.state_id')
    //             ->get(['projects.id as id', 'projects.name as project_name', 'projects.budget', 'projects.advance', 'projects.renewal_charge', 'projects.next_renewal_date', 'projects.client_id as client_id'])
    //             ->where('client_id', $client_slug);

    //         return view('singleClientView', compact('projects'))->with('clients', $clients);
    //     } else {

    //         return redirect('/')->with('status', "The link is broken");
    //     }

    // }

    function delete($id){
        $data=Job::find($id);
        $data->delete();
        return redirect('/');

    }

    function submitProof(Request $req)
    {
        $req->validate([
            'job_id'=>'required',
            'user_id'=>'required' 
        ]);

        $jobID = $req->input('job_id');
        
        $proof = new Submitted_proof;
        $proof->user_id = $req->input('user_id');
        $proof->job_id = $req->input('job_id');
        $proof->description=$req->input('description');
        $proof->status=0;
        $proof->type=$req->input('post_type');
        $proof->save();

        $lastId = $proof->id;

        $pictureInfo = $req->file('file');

        $picName = $pictureInfo->getClientOriginalName();

        $folder = "proofImg";

        $pictureInfo->move($folder, $picName);

        $picUrl = $folder .'/'. $picName;

        $staffPic = Submitted_proof::find($lastId);

        $staffPic->file = $picUrl;
        $staffPic->save();
        
        if($req->input('post_type')==1){
            $req->session()->flash('status','Proof submitted Successfully. Try other jobs');
        return redirect('jobs');
        }
        else{
            $req->session()->flash('status','Proof submitted Successfully. Try other jobs');
            return redirect('contests');
        }
        
    }

    function showCampaignData(Request $req)
    {
        $user_id = 1;
        
        $jobList = Job::where('user_id',$user_id)
                        ->where('featured',0)
                        ->get();
        return view('createCampaign', ['joblist'=> $jobList]);
    }

    function addCampaignData(Request $req)
    {
        $req->validate([
            'job_id'=>'required',
            'priority'=>'required' 
        ]);

        $jobID = $req->input('job_id');
        $userid = 1; //add user id here
        $priority = $req->input('priority');
        
        $campaign = new Campaign; 
        $campaign->user_id = $userid;
        $campaign->job_id = $req->input('job_id');
        $campaign->priority=$req->input('priority');
        $campaign->cost=$req->input('totalCost');
        $campaign->save();


        $job = Job::where('id',$jobID);
        $job ->update(['featured' => $priority]);

        $req->session()->flash('status','Job Priority changed successfully into featured jobs.');
        return redirect('jobs');
            
    }

    function userJobs(Request $req){
        $userid = 1; //change user id here
        $jobList= Job::where('user_id', $userid)
        ->paginate(20); //pagination and default data to show
        return view('usernav/myCreateJob', ['joblist' => $jobList]);
    }

    function userJobSingle($job_slug){
        if(Job::where('id',$job_slug)->exists())
        {
            //$clients = Client::where('id',$client_slug)->first();
            $jobs = Job::join('categories', 'categories.id', '=', 'jobs.category_id')
            ->get(['jobs.id as id','jobs.name as title', 'categories.name as category_name',
            'jobs.description','jobs.requirement','jobs.target','jobs.completion',
            'jobs.availability', 'jobs.price'])
            ->where('id',$job_slug)->first();

            $submission = Submitted_proof::join('jobs','jobs.id','=','submitted_proofs.job_id')
            ->join('usertables','usertables.id','=','submitted_proofs.user_id')
            ->get(['submitted_proofs.id as id','submitted_proofs.job_id',
            'submitted_proofs.type',
            'usertables.name as username','submitted_proofs.file as attachment',
            'submitted_proofs.status as approval'])
            ->where('job_id',$job_slug)
            ->where('type',1);


            return view('usernav/mySingleJob',compact('submission'))->with('jobs',$jobs);
        }
        else{

            return redirect('/')->with('status',"The link is broken");
        }
    }

    function userAppliedJobs(Request $req){
        $user_id=1; //change user id here

        $submission = Submitted_proof::join('jobs','jobs.id','=','submitted_proofs.job_id')
            ->get(['submitted_proofs.id as id','submitted_proofs.job_id',
            'jobs.name as jobTitle','submitted_proofs.file as attachment',
            'jobs.completion as deadline','jobs.price as payment', 'submitted_proofs.status',
            'submitted_proofs.user_id as submitted_user','jobs.id as job_id','submitted_proofs.type'])
            ->where('submitted_user',$user_id)
            ->where('type',1);

        return view('usernav/myAppliedJob', ['submission' => $submission]);
    }

    function userCampaign(Request $req){
        $user_id = 1;

        $jobList = Campaign::join('jobs','jobs.id','=','campaigns.job_id')
        ->get(['jobs.name as name','jobs.availability','campaigns.priority','campaigns.user_id',
        'campaigns.created_at','jobs.id as jobId'])
        ->where('user_id',$user_id);

        return view('usernav/myCampaigns', ['joblist' => $jobList]);
    }

    function approveJob($proof_slug)
    {
        $approve=Submitted_proof::where('id', $proof_slug)
        ->update([
           'status' => 1
        ]);

        $jobAvailability = Submitted_proof::where('id', $proof_slug)
                        ->get(['job_id'])->first();
        $jobUpdate = Job::where('id',$jobAvailability['job_id'])
        ->decrement('due_availability', 1);

        // $req = new Request;
        // $req->session()->flash('status','Job approved successfully');
        return back();
    }
    function rejectJob($proof_slug)
    {
        $approve=Submitted_proof::where('id', $proof_slug)
        ->update([
           'status' => 2
        ]);
        // $req = new Request;
        // $req->session()->flash('status','Job approved successfully');
        return back();
    }


}