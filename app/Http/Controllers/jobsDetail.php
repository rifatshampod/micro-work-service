<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Job;
use App\Models\Category;
use App\Models\Campaign; 
use App\Models\Submitted_proof;
use App\Models\Usertable;
use App\Models\User;
use App\Models\Charge;

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
        $costing = Charge::where('id',1)->first();
        return view('createJob', ['categorylist'=> $categoryList])->with('costing',$costing);
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
        $job->user_id = $req->user()->id;
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
        $categoryList = Category::all();
        $featureJobList= Job::orderBy('featured', 'DESC')
        ->inRandomOrder()
        ->where('featured','>', 0)
        ->where('due_availability','>', 0)
        ->paginate(10); //pagination and default data to show
        
        $jobList= Job::where('featured', 0)
        ->where('due_availability','>', 0)
        ->orderBy('id','desc')
        ->get(); //pagination and default data to show

        return view('allJob', ['joblist' => $jobList])
        ->with('featuredJob',$featureJobList)
        ->with('categorylist',$categoryList);
    }

    function getCategoryData($job_slug)
    {
        $categoryList = Category::all();
        
        $featureJobList= Job::orderBy('featured', 'DESC')
        ->inRandomOrder()
        ->where('featured','>', 0)
        ->where('due_availability','>', 0)
        ->paginate(5); //pagination and default data to show
        
        $jobList= Job::where('featured', 0)
        ->where('due_availability','>', 0)
        ->where('category_id',$job_slug)
        ->orderBy('id','desc')
        ->get(); //pagination and default data to show

        return view('allJob', ['joblist' => $jobList])
        ->with('featuredJob',$featureJobList)
        ->with('categorylist',$categoryList);
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
            'job_id'=>'required'
        ]);

        $jobID = $req->input('job_id');
        
        $proof = new Submitted_proof;
        $proof->user_id = $req->user()->id;
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
            $jobUpdate = Job::where('id',$jobID)
            ->increment('total_submitted', 1);
        
            $req->session()->flash('status','Proof submitted Successfully. Try other jobs');
        return redirect('jobs');
        }
        else{
            $req->session()->flash('status','Proof submitted Successfully. Try other contests');
            return redirect('contests');
        }
        
    }

    function showCampaignData(Request $req)
    {
        $user_id = $req->user()->id;
        
        $jobList = Job::where('user_id',$user_id)
                        ->where('featured',0)
                        ->get();
        $costinghigh = Charge::where('id',2)->first();
        $costingstandard = Charge::where('id',3)->first();
        return view('createCampaign', ['joblist'=> $jobList])
        ->with('costinghigh',$costinghigh)->with('costingstandard',$costingstandard);
    }

    function addCampaignData(Request $req)
    {
        $req->validate([
            'job_id'=>'required',
            'priority'=>'required' 
        ]);

        $jobID = $req->input('job_id');
        $userid = $req->user()->id; //add user id here
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
        $userid = $req->user()->id; //change user id here
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
            ->join('users','users.id','=','submitted_proofs.user_id')
            ->get(['submitted_proofs.id as id','submitted_proofs.job_id',
            'submitted_proofs.type','submitted_proofs.description',
            'users.name as username','submitted_proofs.file as attachment',
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
        $user_id=$req->user()->id; //change user id here

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
        $user_id = $req->user()->id;

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
        ->increment('total_approved',1)
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

    function mistakeApproveJob($proof_slug)  //if approved by mistake
    {
        $approve=Submitted_proof::where('id', $proof_slug)
        ->update([
           'status' => 2
        ]);
        
        $jobAvailability = Submitted_proof::where('id', $proof_slug)
                        ->get(['job_id'])->first();
        $jobUpdate = Job::where('id',$jobAvailability['job_id'])
        ->decrement('total_approved',1)
        ->increment('due_availability', 1);
        // $req = new Request;
        // $req->session()->flash('status','Job approved successfully');
        return back();
    }

    function editUserData($job_slug)
    {
        $user_id = Auth::id(); //change user id here
        if(Job::where('id',$job_slug)->where('user_id',$user_id)->exists())
        {
            
            $jobs = Job::get()
            ->where('id',$job_slug)->first();

            $categorylist = Category::all();

            return view('editJob',compact('categorylist'))->with('jobs',$jobs);
        }
        else{

            return redirect('my-jobs')->with('status',"The link you have given doesn't have permission");
        }
    }

    function updateUserData(Request $req)
    {
        $req->validate([
            'name'=>'required | min:3',
            'agreement'=>'required'
        ]);
        
        
        $job_id = $req->input('job_id');
        $job=Job::where('id', $job_id)
       ->update([
           'name' => $req->input('name'),
           'description' => $req->input('description'),
           'requirement' => $req->input('requirement'),
           'category_id' => $req->input('category'),
           'target' => $req->input('target'),
           'completion' => $req->input('completion')
        ]);

        $req->session()->flash('status','Job edited successfully');
        return redirect('my-jobs');

    
    }


}