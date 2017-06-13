<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Map;

class ViewController extends Controller
{
    //
	public function show($url){
		$tour = Map::select('title', 'text', 'map','links')->where('url', '=', $url)->first();
		return view('tour', ['tour' => $tour]);
	}

}
