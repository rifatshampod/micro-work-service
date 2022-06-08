<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Proof;
use App\Models\User;
use App\Models\Withdraw;

class paymentProofController extends Controller
{
    function getData(Request $req)
    {
        $proofList = Withdraw::join('users','users.id','=','withdraws.user_id')
        ->select('withdraws.id as withdraw_id','users.email','withdraws.amount','withdraws.method',
        'users.country', 'withdraws.completed','withdraws.created_at')
        ->orderBy('withdraw_id','desc')
        ->paginate(20);
        
        return view('paymentHistory', ['prooflist' => $proofList]);
    }

}