<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Video;

class GalleryController extends Controller
{
    //
	public function photo(){
		$photo = Photo::select('capture','link','dif')->where('dif', '=', 'fauna')->get();
		return view('photo', ['photo'=> $photo, "page" => "fauna"]);
	}
	public function video(){
		$video = Video::select('link')->orderBy('id', 'DESC')->get();
		return view('video', ['video'=> $video]);
	}
	public function photoDif($url){
		$photo = Photo::select('capture','link','dif')->where('dif', '=', $url)->get();
		return view('photo', ['photo'=> $photo, 'page' => $url]);
	}
}
