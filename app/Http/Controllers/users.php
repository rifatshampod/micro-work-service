<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Hash;

class users extends Controller
{
    function editProfile(Request $req){
        $userData =User::find($req->input('user_id'));
        $userData->name = $req->input('name');
        $userData->phone=$req->input('phone');
        $userData->country=$req->input('country');
        // $userData->img=$req->input('image');
        $userData->update();

        if($req->file('image')){
            
        $lastId = $req->input('user_id');

        $pictureInfo = $req->file('image');

        $picName = $pictureInfo->getClientOriginalName();

        $folder = "userImage";

        $pictureInfo->move($folder, $picName);

        $picUrl = $folder .'/'. $picName;

        $staffPic = User::find($lastId);

        $staffPic->img = $picUrl;
        $staffPic->update();
        }

        $req->session()->flash('status','Profile information edited successfully');
        return redirect('profile');

    }

    function editPassword(Request $req){
        $userData =User::find($req->input('user_id'));
        $userData->password =Hash::make($req->input('password')) ;
        $userData->update();

        $req->session()->flash('status','Password changed successfully');
        return redirect('profile');

    }
}