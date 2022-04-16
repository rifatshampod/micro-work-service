<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Gig;
use App\Models\Category;



class gigsController extends Controller
{
    function getData()
    {
        $gigList = Gig::paginate(10);
        return view('allGig', ['giglist' => $gigList]);
    }

    function getSingleData($gig_slug)
    {
        if(Gig::where('id',$gig_slug)->exists())
        {
            //$clients = Client::where('id',$client_slug)->first();
            $gigs = Gig::join('categories', 'categories.id', '=', 'gigs.category_id')
            ->get(['gigs.id as id','gigs.title','gigs.user_name','gigs.user_id as gigcreator'
            , 'categories.name as category_name',
            'gigs.description','gigs.features','gigs.speciality','gigs.price','gigs.feature_image as gig_image'])
            ->where('id',$gig_slug)->first();

            return view('singleGig')->with('gigs',$gigs);
        }
        else{

            return redirect('/')->with('status',"The link is broken");
        }
    }

    function showCategoryData(Request $req)
    {
        $categoryList = Category::all();
        return view('createGig1', ['categorylist'=> $categoryList]);
    }

    function addData(Request $req)
    {
        $req->validate([
            'title'=>'required | min:3',
            'agreement'=>'required',
            'file'=>'required'  
        ]);
        
        $gig = new Gig;
        $gig->user_id = 1;
        $gig->title = $req->input('title');
        //$gig->feature_image = $req->input('feature_img');
        $gig->category_id=$req->input('category');
        $gig->description=$req->input('description');
        $gig->features=$req->input('feature');
        $gig->speciality =$req->input('speciality');
        $gig->duration=$req->input('duration');
        $gig->price =$req->input('price');
        $gig->posting_cost =$req->input('cost');
        $gig->time_started =date("Y-m-d H:i:s", strtotime('now'));
        $gig->save();

        $lastId = $gig->id;

        $pictureInfo = $req->file('file');

        $picName = $pictureInfo->getClientOriginalName();

        $folder = "gigsImg";

        $pictureInfo->move($folder, $picName);

        $picUrl = $folder .'/'. $picName;

        $staffPic = Gig::find($lastId);

        $staffPic->feature_image = $picUrl;
        $staffPic->save();
        
        $req->session()->flash('status','New gig added successfully');
        return redirect('gigs');

    
    }

    function getUserData()
    {
        $user_id = 1; //change user id here
        $gigList = Gig::where('user_id',$user_id)
        ->paginate(10);
        return view('allGig', ['giglist' => $gigList]);
    }



}