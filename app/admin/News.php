<?php

Admin::model(App\News::class)->title('Новини')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('id', 'ID');
	Column::string('title', 'Заголовок');
})->form(function ()
{
	FormItem::text('url', 'url новини, зазвичай заголовок латиницею')->required()->unique();
	FormItem::text('title', 'Заголовок')->required();
	FormItem::text('small_img', 'Посилання на картинку для представлення новини')->required();
	FormItem::textarea('description', 'Короткий опис. Відобразиться максимум 200 символів.')->required();
	FormItem::ckeditor('content', 'Контент')->required();
	FormItem::textarea('links', 'Посилання на 4 фото (розділяти символом *). Наприклад: image1.jpg*image2.jpg*image3.jpg. Не обов\'язковий розділ');
});