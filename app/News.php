<?php

namespace App;

use SleepingOwl\Models\SleepingOwlModel;

class News extends SleepingOwlModel
{
    //
	protected $table = 'news';
	protected $fillable = ['id', 'created_at', 'updated_at', 'url', 'title', 'description', 'small_img', 'content', 'links'];
}
