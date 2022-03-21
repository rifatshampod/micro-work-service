<?php
//career page html form submission controller

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;


class careerController extends Controller
{
    function getData(Request $req) //function to get the input data
    {
        $req->validate([
            'name'=>'required | min:3',
            'email'=>'required',
            'file'=>'required'
            
         
        ]);
        //return $req->input();
        //return $req->file('file')->store('cv');
        $care = new Career;
        $care->name = $req->input('name');
        $care->email = $req->input('email');
        $care->contact = $req->input('phone');
        $care->department = $req->input('department');
        //$care->file = $req->input('file');
        $care->save();

        $lastId = $care->id;

        $pictureInfo = $req->file('file');

        $picName = $pictureInfo->getClientOriginalName();

        $folder = "cv";

        $pictureInfo->move($folder, $picName);

        $picUrl = $folder .'/'. $picName;

        $staffPic = Career::find($lastId);

        $staffPic->file = $picUrl;
        $staffPic->save();

        $req->session()->flash('status','Form submitted successfully');
        return redirect('career');

        //return $req->file('file')->store('cv');

    }
}

