<?php

namespace App;

use SleepingOwl\Models\SleepingOwlModel;

class Matherial extends SleepingOwlModel
{
    //
	protected $table = 'matherials';
	public $timestamps = false;
	protected $fillable = ['id', 'link', 'title'];
}
