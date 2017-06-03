<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boss;

class BossController extends Controller
{
	public function administration(){
		//return view('adms');
		$boss = Boss::select('position', 'fio', 'photo')->get();
		return view('boss', ['boss'=> $boss]);
	}
}
