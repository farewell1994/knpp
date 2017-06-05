<?php
use App\Matherial;
use SleepingOwl\Admin\Model\ModelConfiguration;


AdminSection::registerModel(Matherial::class, function (ModelConfiguration $model) {
    $model->setTitle('Матеріали');
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
			AdminColumn::link('title')
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
            AdminFormElement::text('title', 'Назва')->required()
        );
        return $form;
    });

})
    ->addMenuPage(Matherial::class, 0)
    ->setIcon('');