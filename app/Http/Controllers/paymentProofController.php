<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Proof;

class paymentProofController extends Controller
{
    function getData()
    {
        $proofList = Proof::all();
        return view('paymentHistory', ['prooflist' => $proofList]);
    }

}
