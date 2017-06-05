<?php
use App\Map;
use SleepingOwl\Admin\Model\ModelConfiguration;


AdminSection::registerModel(Map::class, function (ModelConfiguration $model) {
    $model->setTitle('Мапи');
    // Display
	    $model->onDisplay(function () {
        $display = AdminDisplay::datatables()
            ->setHtmlAttribute('class', 'table-primary');
        $display->setOrder([[1, 'desc']]);
        $display->setColumnFilters([
            null,
            null,
            AdminColumnFilter::text()->setPlaceholder('Заголовок'),
            null,
        ]);
        $display->setColumns([
            AdminColumn::link('title')
                ->setLabel('Заголовок'),
        ]);
        $display->getColumns()
            ->getControlColumn()
            ->getHeader()
            ->setTitle('Дія')
            ->setHtmlAttribute('class', 'bg-black');
        return $display;
    });
    // Create And Edit
		$model->onCreateAndEdit(function() {
        $form = AdminForm::panel()->addBody(
			AdminFormElement::text('url', 'URL адреса (латиницею)')->required(),
            AdminFormElement::text('title', 'Заголовок')->required(),
			AdminFormElement::text('map', 'Посилання на мапу Google'),
			AdminFormElement::text('links', 'Посилання на фото (розділяти символом *). Наприклад: image1.jpg*image2.jpg*image3.jpg')
        );
        return $form;
    });

})
    ->addMenuPage(Map::class, 0)
    ->setIcon('');