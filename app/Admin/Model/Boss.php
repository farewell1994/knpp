<?php
use App\Boss;
use SleepingOwl\Admin\Model\ModelConfiguration;


AdminSection::registerModel(Boss::class, function (ModelConfiguration $model) {
    $model->setTitle('Керівництво');
    // Display
	    $model->onDisplay(function () {
        $display = AdminDisplay::datatables()
            ->setHtmlAttribute('class', 'table-primary');
        $display->setOrder([[1, 'desc']]);
        $display->setColumnFilters([
            null,
            null,
            AdminColumnFilter::text()->setPlaceholder('Посада'),
            null,
        ]);
        $display->setColumns([
            AdminColumn::link('position')
                ->setLabel('Посада'),
			AdminColumn::link('fio')
                ->setLabel('ФІО'),
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
			AdminFormElement::text('fio', 'ФІО')->required(),
            AdminFormElement::text('position', 'Посада')->required(),
			AdminFormElement::text('photo', 'Фото')
        );
        return $form;
    });

})
    ->addMenuPage(Boss::class, 0)
    ->setIcon('');