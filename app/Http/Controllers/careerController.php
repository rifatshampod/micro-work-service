<?php
//career page html form submission controller

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class careerController extends Controller
{
    function getData(Request $req) //function to get the input data
    {
        $req->validate([
            'name'=>'required | min:3',
            'email'=>'required'
         
        ]);
        //return $req->input();
        return $req->file('file')->store('cv');
    }
}

