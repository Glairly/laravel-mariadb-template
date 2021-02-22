<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;

use App\User;


class UserController extends Controller
{
    //
    public function list(){
        $users = User::all();
        return response()->json($users);
    }

    public function id($id){
        $user = User::where('id','=',$id)->first();
        return response()->json($user);
    }
}
