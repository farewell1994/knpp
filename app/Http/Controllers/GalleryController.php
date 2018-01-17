<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Video;

class GalleryController extends Controller
{
    //
	public function photo(){
		$photo = Photo::select('capture','dif', 'photo')->where('dif', '=', 'fauna')->orderBy('id', 'DESC')->get();
		return view('photo', ['photo'=> $photo, "page" => "fauna"]);
	}
	public function video(){
		$video = Video::select('link')->orderBy('id', 'DESC')->paginate(5);
		return view('video', ['video'=> $video]);
	}
	public function photoDif($url){
		$photo = Photo::select('capture','dif', 'photo')->where('dif', '=', $url)->orderBy('id', 'DESC')->get();
		return view('photo', ['photo'=> $photo, 'page' => $url]);
	}
}
