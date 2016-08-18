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
use App\Events\LikeEvent;
use App\Events\KeydownEvent;
use App\Events\KeyupEvent;

use App\Topic;
use App\Like;
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
  
     
       $message=$request->input('message');
       $user=$request->input('user');
        $id=$request->input('user_id');
       event(new ChatEvent($message,$user,$id));

     //$redis = Redis::connection();
    //$redis->publish('message',json_encode($data));
     
   
  }


public function test(){
return view('test.test');


}



public function allstory(){
  
    $topics=Topic::paginate(3);
    $value=0;

     return view('Ajax.ajax',compact('topics','value'));
     
   
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
public function postlike(Request $request,$id){
      $like=new Like;
      $like->count= 1;
      $like->topic_id=$request->Input('topic');
      $like->parson_id=$request->Input('user');
        $like->save();
       $count=DB::table('likes')
                ->where('topic_id', $id)
                ->sum('count');

         
        
        $id=$request->Input('topic');
        $result=[$count,$id];
         event(new LikeEvent($id,$count));
        return response()->JSON($result);
        
                
    
}


public function typo(){
$user=Auth::user()->id;
$name=Auth::user()->name;
event(new KeydownEvent($user,$name));

       

}

public function keyup(){

event(new KeyupEvent());

       

}





 public function download($id){
    return response()->download('uploads/topics/'.$id);
}

public function chating(){

return view('Chat.chat');

}
public function admin(){
$topics=Topic::all();
return view('Admin.admin',compact('topics'));

}


  

}


    

