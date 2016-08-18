<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use File;
use Storage;
use App\Image;
use DB;

class ImageController extends Controller
{
    public function deleteimage($id){
     DB::table('images')->where('image',$id)->delete();
    \File::Delete('uploads/topics/'.$id);
     return redirect('admin');


    }










}
