<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article; // прописали модель, щоб її викорситовувати

class HomeController extends Controller
{
    public function main(){
		$mainArticle = Article::select('title', 'text', 'links')->where('url', '=', 'index')->orderBy('id', 'DESC')->first(); //отримуємо перший запис с найбільшим id
		//$article = Article::all(); // отримуємо всі записи
		return view('index', ['article' => $mainArticle]); // передаємо змінну в view
	}

    public function other($url){

		$needArticle = Article::select('title', 'text', 'links')->where('url', '=', $url)->firstOrFail();
		//dd($needArticle); //перевірка. що отримаєм
		return view('article', ['article' => $needArticle]); // передаємо змінну в view
	} //
}
