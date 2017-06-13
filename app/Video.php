<?php

namespace App;

use SleepingOwl\Models\SleepingOwlModel;

class Video extends SleepingOwlModel
{
	protected $table = 'videos';
	protected $fillable = ['id', 'link', 'name'];
	public $timestamps = false;
    //
}
