<?php
use App\Article;
use SleepingOwl\Admin\Model\ModelConfiguration;


AdminSection::registerModel(Article::class, function (ModelConfiguration $model) {
    $model->setTitle('Статті');
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
			AdminFormElement::text('url', 'URL адреса (латиницею), наприклад home, або creating')->required(),
            AdminFormElement::text('title', 'Заголовок')->required(),
            AdminFormElement::ckeditor('text', 'Вміст')->required(),
			AdminFormElement::text('links', 'Посилання на фото (розділяти символом *). Наприклад: image1.jpg*image2.jpg*image3.jpg')
        );
        return $form;
    });
	
})
    ->addMenuPage(Article::class, 0)
    ->setIcon('');