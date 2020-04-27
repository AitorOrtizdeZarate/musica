<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cancion extends Model
{
    public function album(){
    	return $this->belongsTo('App\Album');
    }
}
