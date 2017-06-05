<?php
use App\News;
use SleepingOwl\Admin\Model\ModelConfiguration;


AdminSection::registerModel(News::class, function (ModelConfiguration $model) {
    $model->setTitle('Новини');
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
			AdminFormElement::text('url', 'URL адреса (латиницею), зазвичай дублює заголовок')->required()->unique(),
			AdminFormElement::text('description', 'Короткий опис новини')->required(),
            AdminFormElement::text('title', 'Заголовок')->required(),
            AdminFormElement::ckeditor('content', 'Вміст')->required(),
            AdminFormElement::text('small_img', 'Фото для представлення новини')->required(),
			AdminFormElement::text('links', 'Посилання на фото (розділяти символом *). Наприклад: image1.jpg*image2.jpg*image3.jpg')
        );
        return $form;
    });

})
    ->addMenuPage(News::class, 0)
    ->setIcon('');
