<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['tkn','nb_users','room','t1','t2','t3','t4'];
}
