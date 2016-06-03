<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Mail;

class ProjectController extends Controller
{
    



    public function about(){
     
  return view('pages.about');


    }

     public function home(){
     
  return redirect('about');


    }

    

    public function index(){

        return view('welcome');
    }


    public function register(){
     
  return view('Login.register');


    }


   
    public function login(){
     
  return view('Login.login');


    }

   
    public function search(){
     
  return view('Search.search');


    }
   public function email(){
     
    Mail::send('Email.email',['name'=>'KK'],function($message){

     $message->to('kk235544@gmail.com','Khalid')->subject('Welcome');

    });


    }





    public function autocomplete(Request $request){
      $term=$request->term;
      $data=User::where('name','LIKE','%'.$term.'%')->take(10)->get();
      $result=array();
      foreach($data as $key=>$user){
       $result[]=['value'=>$user->name,'id'=>$key];

      }
      
      return response()->json($result);
    }
public function fetchdata(Request $request){
  

  $user=$request->input('name');
  $data=User::where('name',$user)->firstOrFail();
  return view('Search.user',compact('data'));


}



    
}
