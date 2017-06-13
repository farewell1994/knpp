<?php

Admin::model(App\Matherial::class)->title('Матеріали')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('title', 'Назва');
})->form(function ()
{
	FormItem::text('title', 'Назва')->required();
	FormItem::text('link', 'Посилання')->required();
});