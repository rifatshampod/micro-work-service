<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class walletController extends Controller
{
    function getData(Request $req){
        
        return view('wallet');
    }

    function depositeData(Request $req){
        
    }
}