<?php
use App\Photo;
use SleepingOwl\Admin\Model\ModelConfiguration;


AdminSection::registerModel(Photo::class, function (ModelConfiguration $model) {
    $model->setTitle('Фото');
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
            AdminColumn::link('capture')
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
			AdminFormElement::text('capture', 'Підпис')->required(),
            AdminFormElement::text('link', 'URL адреса')->required(),
			AdminFormElement::select('dif', 'Категорія', $depends = ['flora' => 'Флора', 'fauna' => 'Фауна', 'lands' => 'Краєвиди'])->required()
        );
        return $form;
    });
})
    ->addMenuPage(photo::class, 0)
    ->setIcon('');