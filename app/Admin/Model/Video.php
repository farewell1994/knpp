<?php
use App\Video;
use SleepingOwl\Admin\Model\ModelConfiguration;


AdminSection::registerModel(Video::class, function (ModelConfiguration $model) {
    $model->setTitle('Відео');
    // Display
	
    // Create And Edit

})
    ->addMenuPage(Video::class, 0)
    ->setIcon('');