<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\News_scroll;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    function getData()
    {
        $jobList= Job::orderBy('featured', 'DESC')
        ->where('featured', '>=' , 1)
        ->paginate(5); //pagination and default data to show
        
        $news = News_scroll::all();
        return view('home', ['joblist' => $jobList])->with('news',$news);
    }
}