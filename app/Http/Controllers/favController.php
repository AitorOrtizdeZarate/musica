<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cantante;
use App\Cantante_User;
use Illuminate\Support\Facades\Auth;

class favController extends Controller
{
    public function favs($id){
    	$users = User::find($id);
    	return view('fav')->with('users', $users);
    }

    public function addfav($id){
    	$cantante = Cantante::find($id);
    	$user = Auth::user()->id;

    	$fav = new Cantante_User;
    	$fav->cantante_id = $cantante->id;
    	$fav->user_id = $user;
    	$fav->save();
    	return redirect()->route('cantante.index');
    }
}
