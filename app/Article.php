<?php

namespace App;

use SleepingOwl\Models\SleepingOwlModel;

class Article extends SleepingOwlModel
{
    //
	protected $table = 'articles';
	public $timestamps = false;
	protected $fillable = ['id', 'url', 'title', 'text', 'links'];
}
