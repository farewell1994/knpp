<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matherial;

class MathController extends Controller
{
	public function materials(){
		$maths = Matherial::select('title', 'link')->orderBy('id', 'DESC')->get();
		return view('matherials', ['maths' => $maths]);
	}
}
