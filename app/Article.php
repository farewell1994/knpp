<?php

namespace App;

use SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;
use SleepingOwl\Models\SleepingOwlModel;
use SleepingOwl\Models\Traits\ModelWithImageOrFileFieldsTrait;

class Article extends SleepingOwlModel implements ModelWithImageFieldsInterface
{
    use ModelWithImageOrFileFieldsTrait;
    //
	protected $table = 'articles';
	public $timestamps = false;
	protected $fillable = ['id', 'url', 'title', 'text', 'ff', 'sf', 'tf', 'lf'];

    public function getImageFields()
    {
        return [
            'ff' => 'articles/',
            'sf' => 'articles/',
            'tf' => 'articles/',
            'lf' => 'articles/',
        ];
    }
}
