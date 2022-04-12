<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Job;
use App\Models\Category;
use App\Models\Campaign; 
use App\Models\Submitted_proof;

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

            return view('singleJob')->with('jobs',$jobs);
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
        
        $req->session()->flash('status','New job added successfully');
        return redirect('jobs');
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

        $req->session()->flash('status','New campaign added successfully');
        return redirect('jobs');
            
    }
}