<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cantante extends Model
{
    public function album(){
    	return $this->hasMany('App\Album');
    }

    public function user(){
    	return $this->belongsToMany('App\User');
    }
}
