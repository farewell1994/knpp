<?php

Admin::model(App\Boss::class)->title('Керівництво')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('fio', 'ФІО');
	Column::string('position', 'Посада');
})->form(function ()
{
	FormItem::text('position', 'Посада')->required();
	FormItem::text('fio', 'ФІО')->required();
	FormItem::image('photo', 'Фото.  Не обов\'язкове');
});