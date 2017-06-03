<?php
use App\News;
use SleepingOwl\Admin\Model\ModelConfiguration;


AdminSection::registerModel(News::class, function (ModelConfiguration $model) {
    $model->setTitle('Новини');
    // Display
	
    // Create And Edit

})
    ->addMenuPage(News::class, 0)
    ->setIcon('');
