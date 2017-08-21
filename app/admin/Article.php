<?php

Admin::model(App\Article::class)->title('Розділи сайту (./article/. сторінки)')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('url', 'URL');
	Column::string('title', 'Заголовок');
})->form(function ()
{
	FormItem::text('url', 'URL для сторінки, наприклад home або creating')->required();
	FormItem::text('title', 'Заголовок')->required();
	FormItem::ckeditor('text', 'Текст. Примітка: в розділах про маршрути назви маршрутів виділяйте як посилання, та давайте їм унікальну адресу після ./view/,
	наприклад \'knpp.com.ua/view/test\'. Частину test потім вкажете в розділі Статті (з мапою), в полі URL при детальному описі маршруту. Таким самим способом можете оформити будь-яку іншу статтю. Для коректного відображення картинок на різних пристроях, видаліть їх розміри (які підставляються автоматично) у відповідних полях, та залиште їх незаповненими')->required();
	FormItem::textarea('links', 'Посилання на фото (розділяти символом *). Наприклад: image1.jpg*image2.jpg*image3.jpg. Не обов\'язково');
});