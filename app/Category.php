<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title'];

    public function users(){
        return $this->belongsToMany('App\User','categories_users','category_id','user_id');
    }

    public function videos(){
        return $this->belongsToMany('App\Video','categories_videos','category_id','video_id');
    }
}
