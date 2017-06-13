<?php

/*
 * Describe your menu here.
 *
 * There is some simple examples what you can use:
 *
 * 		Admin::menu()->url('/')->label('Start page')->icon('fa-dashboard')->uses('\AdminController@getIndex');
 * 		Admin::menu(User::class)->icon('fa-user');
 * 		Admin::menu()->label('Menu with subitems')->icon('fa-book')->items(function ()
 * 		{
 * 			Admin::menu(\Foo\Bar::class)->icon('fa-sitemap');
 * 			Admin::menu('\Foo\Baz')->label('Overwrite model title');
 * 			Admin::menu()->url('my-page')->label('My custom page')->uses('\MyController@getMyPage');
 * 		});
 */
Admin::menu(\App\Article::class)->icon('fa-book');
Admin::menu(\App\News::class)->icon('fa-bullhorn');
Admin::menu(\App\Boss::class)->icon('fa-users');
Admin::menu(\App\Matherial::class)->icon('fa-file-archive-o');
Admin::menu(\App\Map::class)->icon('fa-map-marker');
Admin::menu(\App\Photo::class)->icon('fa-camera');
Admin::menu(\App\Video::class)->icon('fa-file-movie-o');