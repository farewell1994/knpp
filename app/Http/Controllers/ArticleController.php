<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article; // прописали модель, щоб її викорситовувати

class ArticleController extends Controller
{
    public function main(){
		$mainArticle = Article::select('title', 'text', 'ff', 'sf', 'tf', 'lf')->where('url', '=', 'home')->orderBy('id', 'DESC')->first(); //отримуємо перший запис с найбільшим id
		//$article = Article::all(); // отримуємо всі записи
		$photos = null;
		if($mainArticle) {
			$photos['ff'] = $mainArticle->ff;
			$photos['sf'] = $mainArticle->sf;
			$photos['tf'] = $mainArticle->tf;
			$photos['lf'] = $mainArticle->lf;
		}
		return view('index', ['article' => $mainArticle, 'photos' => $photos, "homelink" => true]); // передаємо змінну в view
	}

    public function other($url){

		$needArticle = Article::select('title', 'text', 'ff', 'sf', 'tf', 'lf')->where('url', '=', $url)->first();
		$photos = null;
		if($needArticle) {
			$photos['ff'] = $needArticle->ff;
			$photos['sf'] = $needArticle->sf;
			$photos['tf'] = $needArticle->tf;
			$photos['lf'] = $needArticle->lf;
		}
		//dd($needArticle); //перевірка. що отримаєм
		return view('article', ['article' => $needArticle, 'photos' => $photos]); // передаємо змінну в view
	}//
}
