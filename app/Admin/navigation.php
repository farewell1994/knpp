<?php

use SleepingOwl\Admin\Navigation\Page;


// Default check access logic
// AdminNavigation::setAccessLogic(function(Page $page) {
// 	   return auth()->user()->isSuperAdmin();
// });
//
// AdminNavigation::addPage(\App\User::class)->setTitle('test')->setPages(function(Page $page) {
// 	  $page
//		  ->addPage()
//	  	  ->setTitle('Dashboard')
//		  ->setUrl(route('admin.dashboard'))
//		  ->setPriority(100);
//
//	  $page->addPage(\App\User::class);
// });
//
// // or
//
// AdminSection::addMenuPage(\App\User::class)

    AdminSection::addMenuPage(\App\News::class)->setIcon('fa fa-file-text-o');
    AdminSection::addMenuPage(\App\Matherial::class)->setIcon('fa fa-file-text-o');
    AdminSection::addMenuPage(\App\Photo::class)->setIcon('fa fa-file-text-o');
    AdminSection::addMenuPage(\App\Article::class)->setIcon('fa fa-file-text-o');
	AdminSection::addMenuPage(\App\Video::class)->setIcon('fa fa-file-text-o');
	AdminSection::addMenuPage(\App\Map::class)->setIcon('fa fa-file-text-o');
	AdminSection::addMenuPage(\App\Boss::class)->setIcon('fa fa-file-text-o');
return [
    /*[
        'title' => 'Dashboard',
        'icon'  => 'fa fa-dashboard',
        'url'   => route('admin.dashboard'),
    ],
    [
        'title' => 'Home',
        'icon'  => 'fa fa-dashboard',
        'url'   => route('admin.dashboard'),
    ],

	[
        'title' => 'Статті',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => route('admin.articles'),
    ], 
	[
      'title' => 'Новини',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => route('admin.news'),
    ],
	[
        'title' => 'Керівництво',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => route('admin.bosses'),
    ],
	[
        'title' => 'Матеріали',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => route('admin.math'),
    ],
	[
        'title' => 'Фото',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => route('admin.photo'),
    ],
	[
        'title' => 'Відео',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => route('admin.video'),
    ],
	[
        'title' => 'Мапи',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => route('admin.maps'),
    ],


    // Examples
    // [
    //    'title' => 'Content',
    //    'pages' => [
    //
    //        \App\User::class,
    //
    //        // or
    //
    //        (new Page(\App\User::class))
    //            ->setPriority(100)
    //            ->setIcon('fa fa-user')
    //            ->setUrl('users')
    //            ->setAccessLogic(function (Page $page) {
    //                return auth()->user()->isSuperAdmin();
    //            }),
    //
    //        // or
    //
    //        new Page([
    //            'title'    => 'News',
    //            'priority' => 200,
    //            'model'    => \App\News::class
    //        ]),
    //
    //        // or
    //        (new Page(/* ... *///))->setPages(function (Page $page) {
    //            $page->addPage([
    //                'title'    => 'Blog',
    //                'priority' => 100,
    //                'model'    => \App\Blog::class
	//		      ));
    //
	//		      $page->addPage(\App\Blog::class);
    //	      }),
    //
    //        // or
    //
    //        [
    //            'title'       => 'News',
    //            'priority'    => 300,
    //            'accessLogic' => function ($page) {
    //                return $page->isActive();
    //		      },
    //            'pages'       => [
    //
    //                // ...
    //
    //            ]
    //        ]
    //    ]
    // ]
];