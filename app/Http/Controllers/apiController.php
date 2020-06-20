<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class apiController extends Controller
{
    public function llamada(Request $request){

    	$client = new Client();
    	$request = $client->request('GET', 'https://swapi.dev/api/planets/');

    	$planetas = json_decode($request->getBody(), true);



    	return view('api.api')->with('planetas', $planetas);
    }
}


//https://swapi.dev/api/planets/