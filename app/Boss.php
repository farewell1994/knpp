<?php

namespace App;

use SleepingOwl\Models\SleepingOwlModel;

class Boss extends SleepingOwlModel
{
    //
	protected $table = 'bosses';
	public $timestamps = false;
	protected $fillable = ['id', 'position', 'fio', 'photo'];
}
