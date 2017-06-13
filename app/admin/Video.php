<?php

Admin::model(App\Video::class)->title('Відео')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('link', 'Посилання');
	Column::string('name', 'Назва');
})->form(function ()
{
	FormItem::text('link', 'URL адреса відео з Youtube. Остання частина, наприклад, gDu8ZPSHums')->required();
	FormItem::text('name', 'Назва')->required();
});