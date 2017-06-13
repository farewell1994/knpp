<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article; // прописали модель, щоб її викорситовувати
use Input;
use App\News;

class SearchController extends Controller
{
    public function search(){
			$key = Input::get('search');//отримуєм get параметр
			$news = News::select('id', 'url', 'title', 'description', 'content')
			->where('content', 'like', '%'.$key.'%')
            ->orWhere('title', 'like', '%'.$key.'%')
            ->orWhere('description', 'like', '%'.$key.'%')
            ->orderBy('id', 'DESC')
			->get();//вибираєм новини
			$articles = Article::select('id', 'url', 'title', 'text')
			->where('text', 'like', '%'.$key.'%')
            ->orWhere('title', 'like', '%'.$key.'%')
            ->orderBy('id', 'DESC')
			->get();//вибираєм статті
		return view('search', ['news' => $news, 'articles' => $articles, 'key' => $key]); // передаємо змінні в view
	}
}
