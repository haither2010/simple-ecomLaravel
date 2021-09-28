<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    function login(Request $req){
        
        $users = User::where(['email' => $req->email])->first();
        // $user = User::where("email", "=", "$req->email")->get();
        if($users->email == $req->email && $req->password == Hash::check($req->password, $users->password))
        {
            return "Logged in welcom dear";
        }else
        {
            return redirect('/');
        }
    }
}


