<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Video extends Model
{
    protected $fillable = ['url'];
    public function categories(){
        return $this->belongsToMany('App\Category','categories_videos','category_id','video_id');
    }
}