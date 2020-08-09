<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cancion extends Model
{
    public function album(){
    	return $this->belongsTo('App\Album');
    }

    public function cantante(){
    	return $this->belongsTo('App\Cantante');
    }
}
