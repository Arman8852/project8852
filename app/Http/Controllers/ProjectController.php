<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Mail;
use App\Chat;
use DB;
use Auth;
use Redis;
use App\Events\ChatEvent;
use App\Events\CommentEvent;
use App\Topic;
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

public function chatbox(){

  return view('Chat.submit');
}



public function sendMessage(Request $request){
  
     $chat=new Chat;
      $chat->message=$request->input('message');
       $chat->save();
       $message=$request->input('message');
       $user=$request->input('user');
       event(new ChatEvent($message,$user));

     //$redis = Redis::connection();
    //$redis->publish('message',json_encode($data));
     
   
  }


public function test(){
$data=[];
 Mail::send('test.test',$data,function($message){

$message->to('anm.nayeem98@gmail.com')->subject('Welcome To Rikkho');

 }); 



}



public function allstory(){
  
    $topics=Topic::paginate(3);
     return view('test.test',compact('topics'));
     
   
  }

public function ajax(){

  return view('Ajax.ajax');
}

public function postajax(Request $request){
       $chat=new Chat;
      $chat->message=$request->input('message');
       $chat->save();
       $message=$request->input('message');
       
      
}



public function postremark(Request $request){
       $chat=new Chat;
      $chat->message=$request->input('message');
       $chat->save();
       $message=$request->input('message');
       $user=$request->input('user');
       $id=$request->input('id');
        event(new CommentEvent($message,$id));
      
}




  

}


    

