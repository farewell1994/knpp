<?php

Admin::model(App\Photo::class)->title('Фото')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('capture', 'Підпис');
	Column::string('dif', 'Категорія');
})->form(function ()
{
	FormItem::text('capture', 'Підпис')->required();
	FormItem::select('dif', 'Категорія')->list(['flora' => 'Флора', 'fauna' => 'Фауна', 'lands' => 'Краєвиди'])->required();
	FormItem::text('link', 'Посилання на фото')->required();
});