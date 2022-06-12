<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Deposit;
use App\Models\Withdraw;

class walletController extends Controller
{
    function getData(Request $req){
        $user_id = $req->user()->id;
        $balance= Deposit::where('user_id',$user_id)
                    ->where('status',1)
                    ->get();
        $withdraw= Withdraw::where('user_id',$user_id)
                    ->where('completed',1)
                    ->get();
        $transaction= Deposit::where('user_id',$user_id)
                    ->orderBy('created_at',"DESC")
                    ->get();
        return view('wallet',['balance'=>$balance])
        ->with('withdraw',$withdraw)
        ->with('transaction',$transaction);
    }

    function depositData(Request $req){
        $req->validate([
            'method'=>'required',
            'account_no'=>'required',
            'amount'=>'required'
        ]);

        $deposit = new Deposit;
        $deposit->user_id = $req->user()->id;
        $deposit->method = $req->input('method');
        $deposit->account_no=$req->input('account_no');
        $deposit->amount=$req->input('amount');
        $deposit->transaction_id=$req->input('transaction_no');
        $deposit->status =0;
        $deposit->save();

        $req->session()->flash('status','Deposit request submitted successfully');
        return redirect('my-wallet#all-transactions');
    }

    function withdrawData(Request $req){
        $req->validate([
            'method'=>'required',
            'account_no'=>'required',
            'amount'=>'required'
        ]);

        $withdraw = new Withdraw;
        $withdraw->user_id = $req->user()->id;
        $withdraw->method = $req->input('method');
        $withdraw->account_no=$req->input('account_no');
        $withdraw->amount=$req->input('amount');
        $withdraw->completed =0;
        $withdraw->save();

        $req->session()->flash('status','Withdraw request submitted successfully');
        return redirect('payment-proof');
    }
}