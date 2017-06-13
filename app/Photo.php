<?php

namespace App;

use SleepingOwl\Models\SleepingOwlModel;

class Photo extends SleepingOwlModel
{
    //
	protected $table = 'photos';
	public $timestamps = false;
	protected $fillable = ['id', 'capture', 'link', 'dif'];
}
