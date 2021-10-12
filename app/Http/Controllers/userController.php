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
            //put method reference https://laravel.com/docs/8.x/collections#method-put
            $req->session()->put('user', $users);
            return redirect('/');
        }else
        {
            return redirect('/');
        }
    }

    function logout(Request $req)
    {
        $req->session()->forget('user');
        return redirect('/');
    }
}


