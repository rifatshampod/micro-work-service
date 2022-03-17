<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class usersController extends Controller
{
    function index()
    {
        $collection= Http::get('https://reqres.in/api/users?page=1');
        return view('faq',['collection'=>$collection['data']]);

    }
}
