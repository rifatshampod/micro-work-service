<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Gig;



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
            ->get(['gigs.id as id','gigs.title','gigs.user_name', 'categories.name as category_name',
            'gigs.description','gigs.features','gigs.speciality','gigs.price'])
            ->where('id',$gig_slug)->first();

            return view('singleGig')->with('gigs',$gigs);
        }
        else{

            return redirect('/')->with('status',"The link is broken");
        }
    }

}
