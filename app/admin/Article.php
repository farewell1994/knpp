<?php

Admin::model(App\Article::class)->title('Статті')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('url', 'URL');
	Column::string('title', 'Заголовок');
})->form(function ()
{
	FormItem::text('url', 'URL для сторінки, наприклад home або creating')->required();
	FormItem::text('title', 'Заголовок')->required();
	FormItem::ckeditor('text', 'Текст. Примітка: в статтях про маршрути назви маршрутів виділяйте як посилання, та давайте їм унікальну адресу після ./view/,
	наприклад \'knpp.com.ua/public/view/test\'. Частину test потім вкажете в розділі Мапи, в полі URL при детальному описі маршруту.  Для коректного відображення картинок на різних пристроях, видаліть їх розміри (які підставляються автоматично) у відповідних полях, та залиште їх незаповненими')->required();
	FormItem::textarea('links', 'Посилання на фото (розділяти символом *). Наприклад: image1.jpg*image2.jpg*image3.jpg. Не обов\'язково');
});