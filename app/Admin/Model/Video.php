<?php
use App\Video;
use SleepingOwl\Admin\Model\ModelConfiguration;


AdminSection::registerModel(Video::class, function (ModelConfiguration $model) {
    $model->setTitle('Відео');
    // Display
	    $model->onDisplay(function () {
        $display = AdminDisplay::datatables()
            ->setHtmlAttribute('class', 'table-primary');
        $display->setOrder([[1, 'desc']]);
        $display->setColumnFilters([
            null,
            null,
            AdminColumnFilter::text()->setPlaceholder('Назва'),
            null,
        ]);
        $display->setColumns([
            AdminColumn::link('link')
                ->setLabel('Посилання'),
			AdminColumn::link('name')
                ->setLabel('Назва'),
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
			AdminFormElement::text('link', 'URL адреса')->required(),
            AdminFormElement::text('name', 'Назва')->required()
        );
        return $form;
    });
})
    ->addMenuPage(Video::class, 0)
    ->setIcon('');