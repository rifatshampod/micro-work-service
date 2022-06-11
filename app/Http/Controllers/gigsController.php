<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Gig;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\Charge;
use App\Models\User;
use App\Models\Rating;
use App\Models\Deposit;
use App\Models\Withdraw;



class gigsController extends Controller
{
    function getData()
    {
        $categoryList = Category::all();
        $gigList = Gig::join('users','gigs.user_id','=','users.id')
        ->select('gigs.id as id','gigs.title','users.img','gigs.review','gigs.review_amount',
            'gigs.features','gigs.price','gigs.feature_image')
        ->paginate(20);
        return view('allGig', ['giglist' => $gigList])->with('categorylist',$categoryList);
    }

    function getCategoryData($gig_slug)
    {
        $categoryList = Category::all();
        $gigList = Gig::join('users','gigs.user_id','=','users.id')
        ->select('gigs.id as id','gigs.title','users.img','gigs.review','gigs.review_amount',
            'gigs.features','gigs.price','gigs.feature_image')
        ->where('gigs.category_id',$gig_slug)
        ->paginate(20);
        return view('allGig', ['giglist' => $gigList])->with('categorylist',$categoryList);
    }

    function getSingleData($gig_slug)
    {
        if(Gig::where('id',$gig_slug)->exists())
        {
            //$clients = Client::where('id',$client_slug)->first();
            $gigs = Gig::join('categories', 'categories.id', '=', 'gigs.category_id')
            ->join('users','users.id','=','gigs.user_id')
            ->get(['gigs.id as id','gigs.title','users.name as user_name','users.country','users.img','gigs.user_id as gigcreator'
            , 'categories.name as category_name',
            'gigs.description','gigs.features','gigs.speciality','gigs.price','gigs.feature_image as gig_image'])
            ->where('id',$gig_slug)->first();

            if(Rating::where('gig_id',$gig_slug)->exists()){
                $ratings = Rating::where('gig_id',$gig_slug)
                ->get();
            }

            else{
                $ratings = "No Rating";
            }

            

            return view('singleGig')->with('gigs',$gigs)->with('ratings',$ratings);
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
        $costing = Charge::where('id',4)->first();
        return view('createGig1', ['categorylist'=> $categoryList])
        ->with('costing',$costing)
        ->with('balance',$balance)
        ->with('withdraw',$withdraw);
    }

    function addData(Request $req)
    {
        $req->validate([
            'title'=>'required | min:3',
            'agreement'=>'required',
            'file'=>'required'  
        ]);
        
        $gig = new Gig;
        $gig->user_id = $req->user()->id;
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

    function getUserData(Request $req)
    {
        $user_id = $req->user()->id; //change user id here
        $gigList = Gig::join('users','gigs.user_id','=','users.id')
        ->select('gigs.id as id','gigs.title','users.img','gigs.review','gigs.review_amount',
            'gigs.features','gigs.price','gigs.feature_image')
        ->where('gigs.user_id',$user_id)
        ->paginate(20);
        return view('allGig', ['giglist' => $gigList]);
        
    }

    function editUserData($gig_slug)
    {
        $user_id = Auth::id(); //change user id here
        if(Gig::where('id',$gig_slug)->where('user_id',$user_id)->exists())
        {
            //$clients = Client::where('id',$client_slug)->first();
            $gigs = Gig::join('categories', 'categories.id', '=', 'gigs.category_id')
            ->get(['gigs.id as id','gigs.title','gigs.user_name','gigs.user_id as gigcreator'
            , 'categories.name as category_name',
            'gigs.description','gigs.features','gigs.speciality','gigs.price','gigs.feature_image as gig_image'])
            ->where('id',$gig_slug)->first();

            $categorylist = Category::all();

            return view('editGig',compact('categorylist'))->with('gigs',$gigs);
        }
        else{

            return redirect('my-gigs')->with('status',"The link you have given doesn't have permission");
        }
    }

    function updateUserData(Request $req)
    {
        $req->validate([
            'title'=>'required | min:3',
            'agreement'=>'required'
        ]);
        
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
        return redirect('gigs');

    
    }



}
    