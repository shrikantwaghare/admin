<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class Users extends Controller
{
    //
    function list()
    {
        //return Session::get('logData');
        $user=User::all();
        return view('userlist',['user'=>$user]);
    }
    function create()
    {
        return view('create');
    }
    function loginsubmit(Request $req)
    {
         User::select('*')->where(
            [
                ['email','=',$req->email],
                ['password','=',$req->password]
            ]
        )->get();
        $req->session()->put('logData',[$req->input()]);
        return redirect('/userlist');
    }
    function createsubmit(Request $req)
    {
        $user= new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=$req->password;
        $result=$user->save();
        if($result)
        {
            $req->session()->put('logData',[$req->input()]);
            return redirect('/userlist');
        }
    }
}
