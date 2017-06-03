<?php
use App\Map;
use SleepingOwl\Admin\Model\ModelConfiguration;


AdminSection::registerModel(Map::class, function (ModelConfiguration $model) {
    $model->setTitle('Мапи');
    // Display
	
    // Create And Edit

})
    ->addMenuPage(Map::class, 0)
    ->setIcon('');