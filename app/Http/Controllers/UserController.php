<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use DB;

class UserController extends Controller
{
    public function userprofile($id){
      $user = User::where('id',$id)->firstOrFail();
      
     return view('userprofile',compact('user'));


    }
   


}
