<?php

Admin::model(App\Map::class)->title('Статті (+ мапа)(./view/. сторінки)')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('title', 'Назва статті');
})->form(function ()
{
	FormItem::text('url', 'url статті, задається в посиланні загальної статті саме на цей сторінку (частина після ...view/)')->required()->unique();
	FormItem::text('title', 'Назва статті')->required();
	FormItem::ckeditor('text', 'Текст.  Для коректного відображення картинок на різних пристроях, видаліть їх розміри (які підставляються автоматично) у відповідних полях, та залиште їх незаповненими')->required();
	FormItem::textarea('map', 'Посилання на мапу Google');
    FormItem::image('ff', 'Фото 1');
    FormItem::image('sf', 'Фото 2');
    FormItem::image('tf', 'Фото 3');
    FormItem::image('lf', 'Фото 4');
});