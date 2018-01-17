<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Map;

class ViewController extends Controller
{
    //
	public function show($url){
		$tour = Map::select('title', 'text', 'map', 'ff', 'sf', 'tf', 'lf')->where('url', '=', $url)->first();
		$photos = null;
		if($tour){
			$photos['ff'] = $tour->ff;
			$photos['sf'] = $tour->sf;
			$photos['tf'] = $tour->tf;
			$photos['lf'] = $tour->lf;
		}
		return view('tour', ['tour' => $tour, 'photos' => $photos]);
	}

}
