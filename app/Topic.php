<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
	protected $guarded=[];
    public function user()
    {
        return $this->belongsTo('App\User');
    }

     public function forum()
    {
        return $this->belongsTo('App\Forum');
    }
     public function images(){
         return $this->hasMany('App\Image');


     }

     public function likes(){
         return $this->hasMany('App\Like');


     }


}
