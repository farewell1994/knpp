<?php

Route::get('', ['as' => 'admin.dashboard', function () {
	$content = 'Оберіть пункт адміністрування у боковому меню';
	return AdminSection::view($content, 'Вітаємо!');
}]);

Route::get('/articles/', ['as' => 'admin.articles', function () {
	$content = '';
	return AdminSection::view($content, 'Адміністрування статей');
}]);

Route::get('/news/', ['as' => 'admin.news', function () {
	$content = '';
	return AdminSection::view($content, 'Адміністрування новин');
}]);

Route::get('/math/', ['as' => 'admin.math', function () {
	$content = '';
	return AdminSection::view($content, 'Адміністрування матеріалів');
}]);

Route::get('/bosses/', ['as' => 'admin.bosses', function () {
	$content = '';
	return AdminSection::view($content, 'Адміністрування керівництва');
}]);

Route::get('/photo/', ['as' => 'admin.photo', function () {
	$content = '';
	return AdminSection::view($content, 'Адміністрування фото');
}]);

Route::get('/video/', ['as' => 'admin.video', function () {
	$content = '';
	return AdminSection::view($content, 'Адміністрування відео');
}]);

Route::get('/maps/', ['as' => 'admin.maps', function () {
	$content = '';
	return AdminSection::view($content, 'Адміністрування маршрутів');
}]);