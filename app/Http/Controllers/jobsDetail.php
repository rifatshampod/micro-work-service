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

    function jobView($job_slug)  //to display single job page
    {
        if (Client::where('id', $client_slug)->exists()) {
            $clients = Client::where('id', $client_slug)->first();
            $projects = $data = Project::join('clients', 'clients.id', '=', 'projects.client_id')
            // ->join('city', 'city.state_id', '=', 'state.state_id')
                ->get(['projects.id as id', 'projects.name as project_name', 'projects.budget', 'projects.advance', 'projects.renewal_charge', 'projects.next_renewal_date', 'projects.client_id as client_id'])
                ->where('client_id', $client_slug);

            return view('singleClientView', compact('projects'))->with('clients', $clients);
        } else {

            return redirect('/')->with('status', "The link is broken");
        }

    }

    function delete($id){
        $data=Job::find($id);
        $data->delete();
        return redirect('/');

    }
}
