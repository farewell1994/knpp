<?php

Admin::model(App\Map::class)->title('Мапи маршрутів')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('title', 'Назва маршруту');
})->form(function ()
{
	FormItem::text('url', 'url статті, задається в посиланні загальної статті саме на цей маршрут (частина після ...view/)')->required()->unique();
	FormItem::text('title', 'Назва маршруту')->required();
	FormItem::ckeditor('text', 'Текст')->required();
	FormItem::textarea('links', 'Посилання на фото (розділяти символом *). Наприклад: image1.jpg*image2.jpg*image3.jpg. Не обов\'язковий розділ');
	FormItem::textarea('map', 'Посилання на мапу Google')->required();
});