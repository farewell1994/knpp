<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article; // прописали модель, щоб її викорситовувати
use App\Matherial;
use App\Boss;

class HomeController extends Controller
{
    public function main(){
		$mainArticle = Article::select('title', 'text', 'links')->where('url', '=', 'index')->orderBy('id', 'DESC')->first(); //отримуємо перший запис с найбільшим id
		//$article = Article::all(); // отримуємо всі записи
		return view('index', ['article' => $mainArticle]); // передаємо змінну в view
	}

    public function other(){
		$arr = explode('/', $_SERVER['REQUEST_URI']);
		$cur = array_pop($arr);//з адреси беремо назву для статті
		$needArticle = Article::select('title', 'text', 'links')->where('url', '=', $cur)->first();
		//dd($needArticle); //перевірка. що отримаєм
		return view('article', ['article' => $needArticle]); // передаємо змінну в view
	}
	
	public function materials(){
		$maths = Matherial::select('title', 'link')->orderBy('id', 'DESC')->get();
		return view('matherials', ['maths' => $maths]);
	}
	
	public function administration(){
		//return view('adms');
		$boss = Boss::select('position', 'fio', 'photo')->get();
		return view('boss', ['boss'=> $boss]);
	}
}
