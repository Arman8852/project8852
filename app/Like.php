<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
	protected $guarded=[];
	protected $fillable = ['parson_id', 'topic_id'];
     public function user()
    {
        return $this->belongsTo('App\User');
    }


  public function topic()
    {
        return $this->belongsTo('App\Topic');
    }










}
