<?php

namespace App;

use SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;
use SleepingOwl\Models\SleepingOwlModel;
use SleepingOwl\Models\Traits\ModelWithImageOrFileFieldsTrait;

class Photo extends SleepingOwlModel implements ModelWithImageFieldsInterface
{
    use ModelWithImageOrFileFieldsTrait;
    //
	protected $table = 'photos';
	public $timestamps = false;
	protected $fillable = ['id', 'capture', 'dif', 'photo'];

    public function getImageFields()
    {
        return [
            'photo' => 'photo/',
        ];
    }
}
