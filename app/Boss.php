<?php

namespace App;

use SleepingOwl\Models\Interfaces\ModelWithImageFieldsInterface;
use SleepingOwl\Models\SleepingOwlModel;
use SleepingOwl\Models\Traits\ModelWithImageOrFileFieldsTrait;

class Boss extends SleepingOwlModel implements ModelWithImageFieldsInterface
{
    use ModelWithImageOrFileFieldsTrait;
    //
	protected $table = 'bosses';
	public $timestamps = false;
	protected $fillable = ['id', 'position', 'fio', 'photo'];

    public function getImageFields()
    {
        return [
            'photo' => 'bosses/',
        ];
    }
}
