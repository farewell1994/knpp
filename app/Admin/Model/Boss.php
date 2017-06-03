<?php
use App\Boss;
use SleepingOwl\Admin\Model\ModelConfiguration;


AdminSection::registerModel(Boss::class, function (ModelConfiguration $model) {
    $model->setTitle('Керівництво');
    // Display
	
    // Create And Edit

})
    ->addMenuPage(Boss::class, 0)
    ->setIcon('');