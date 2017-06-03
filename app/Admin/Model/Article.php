<?php
use App\Article;
use SleepingOwl\Admin\Model\ModelConfiguration;


AdminSection::registerModel(Article::class, function (ModelConfiguration $model) {
    $model->setTitle('Статті');
    // Display
	
    // Create And Edit

})
    ->addMenuPage(Article::class, 0)
    ->setIcon('');