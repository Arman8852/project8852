<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
Use App\Topic;
Use App\Forum;
use DB;
use App\Image;

class TopicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Topic $topic)
    {
        
       $forums=Forum::lists('title','id');

  return view('edittopics',compact('topic','forums'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Topic $topic)
    {
       
       $topic->update($request->all());
       if($request->hasFile('image')){
             $logo=$request->file('image');
              $upload='uploads/topics';
               $filename=$logo->getClientOriginalName();
                  $success= $logo->move($upload, $filename);

                  $topic->image=$logo->getClientOriginalName();
              }
                   $topic->save();
       return view('privatetopic',compact('topic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
    

    public function topics(Forum $forum){

      return view('Forum.topics',compact('forum'));


   }


   public function submittopics(){

    $topics=Topic::paginate(3);
     $forums=Forum::lists('title','id');

     return view('topics',compact('topics','forums'));


   }

   public function gettopics(Request $request){
   
           $topic=new Topic;
           $topic->title=$request->Input('title');
            $topic->detail=$request->Input('detail');
             $topic->user_id=$request->Input('user_id');
             $topic->forum_id=$request->Input('forum');
                   $topic->save();
                   $image=Topic::where('title',$request->Input('title'))->firstOrFail();
                     
                  return view('image',compact('image'));

   }

   public function upload(Request $request,$id){
           
           $photo=new Image;
           $file=$request->file('file');
           $filename=uniqid().$file->getClientOriginalName();
           $upload='uploads/topics';
           $file->move($upload, $filename);
           $photo->image=$filename;
           $photo->topic_id=$id;
           $photo->save();

          

           

   }

    public function showtopicsdetails($id){
  
         $detail=Topic::where('id',$id)->firstOrFail();
         return view('userstory',compact('detail'));
     

}
  public function editmytopic($id){
  $topic=Topic::where('id',$id)->firstOrFail();
  $forums=Forum::lists('title','id');

  return view('edittopics',compact('topic','forums'));


}

public function showeditedtopics(){
  return view('ownstoryedited');


}
public function getimage(){
  return view('image');


}




}
