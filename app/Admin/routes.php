<?php

Route::get('', ['as' => 'admin.dashboard', function () {
	$content = 'Оберіть пункт адміністрування у боковому меню';
	return AdminSection::view($content, 'Вітаємо!');
}]);

Route::get('exit', ['as' => 'admin.exit', function () {
    $content = '<a href="http://localhost/laravel/knpp-temp/public/home">Перейти до сторінки виходу</a>';
    return AdminSection::view($content, '');
}]);
