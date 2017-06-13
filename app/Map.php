<?php

namespace App;

use SleepingOwl\Models\SleepingOwlModel;

class Map extends SleepingOwlModel
{
    //
	protected $table = 'maps';
	public $timestamps = false;
	protected $fillable = ['id', 'url', 'title', 'text', 'links', 'map'];
}
