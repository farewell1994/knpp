<?php
use App\Photo;
use SleepingOwl\Admin\Model\ModelConfiguration;


AdminSection::registerModel(Photo::class, function (ModelConfiguration $model) {
    $model->setTitle('Фото');
    // Display
	
    // Create And Edit

})
    ->addMenuPage(photo::class, 0)
    ->setIcon('');