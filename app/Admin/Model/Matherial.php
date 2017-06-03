<?php
use App\Matherial;
use SleepingOwl\Admin\Model\ModelConfiguration;


AdminSection::registerModel(Matherial::class, function (ModelConfiguration $model) {
    $model->setTitle('Матеріали');
    // Display
	
    // Create And Edit

})
    ->addMenuPage(Matherial::class, 0)
    ->setIcon('');