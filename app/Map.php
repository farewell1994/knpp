<?php

namespace App;

use SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;
use SleepingOwl\Models\SleepingOwlModel;
use SleepingOwl\Models\Traits\ModelWithImageOrFileFieldsTrait;

class Map extends SleepingOwlModel implements ModelWithImageFieldsInterface
{
    use ModelWithImageOrFileFieldsTrait;
    //
	protected $table = 'maps';
	public $timestamps = false;
	protected $fillable = ['id', 'url', 'title', 'text', 'map', 'ff', 'sf', 'tf', 'lf'];

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
