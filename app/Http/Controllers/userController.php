<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    //
    function login(Request $req){
        $user = User::where([
            'email'=>$req->email
        ])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "<h1>password is not matched</h1>";
        }else{
            $req->session()->put('user',$user);
             return redirect('/');
        }


}
}