<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class favController extends Controller
{
    public function favs($id){
    	$users = User::find($id);
    	return view('fav')->with('users', $users);
    }
}
