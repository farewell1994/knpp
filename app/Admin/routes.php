<?php

Route::get('', ['as' => 'admin.dashboard', function () {
	$content = 'Оберіть пункт адміністрування у боковому меню';
	return AdminSection::view($content, 'Вітаємо!');
}]);
