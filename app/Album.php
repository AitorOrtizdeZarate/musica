<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public function cantante(){
    	return $this->belongsTo('App\Cantante');
    }
}
