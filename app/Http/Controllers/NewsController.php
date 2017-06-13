<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use DB;

class NewsController extends Controller
{
    //
	public function shownews(){
	$firstNews = News::select('created_at', 'url', 'title', 'description', 'small_img', 'content')->orderBy('id', 'DESC')->paginate(6);
	return view('news', ['first' => $firstNews]);
	}
	public function pageNews($url){
		$view = News::select('title', 'content', 'links')->where('url', '=', $url)->first();
		return view('showNew', ['new'=> $view]);
	}
}
