<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="icon" type="image/x-icon" href="../favicon.ico">
	@yield('title')
	<meta name="description" content="«Цуманська пуща - національний природний парк в Україні. Розташований у межах Ківерцівського району Волинської області,
		на території однойменного лісового масиву поблизу смт Цумань, в межиріччі Стиру та Горині.">
	<meta name="keywords" content="Волинь, національний, природний, парк, Ківерці, Цумань, зубр, природа" />
	<meta name="author" content="Karmanov Andriy">
	<meta name="copyright" content="Всі права належать НПП Цуманська пуща">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet' href="{{URL::asset('asset/bootstrap/css/bootstrap.min1.css')}}" type='text/css' media='all'>
	<link rel='stylesheet' href="{{URL::asset('asset/css/styles.css')}}" type='text/css' media='all'>
	<script src="https://code.jquery.com/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="{{URL::asset('asset/gallery1/fancybox/jquery.fancybox.pack.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('asset/js/fancybox.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('asset/js/main.js')}}"></script>
	<link rel='stylesheet' href="{{URL::asset('asset/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('asset/gallery1/fancybox/jquery.fancybox.css')}}" type="text/css" media="screen" />
</head>
<body>
<div id="fb-root"></div>
<script type="text/javascript" src="{{URL::asset('asset/js/fb.js')}}"></script>
<div class="wrapper">
	<header>
		<div class="row">
			<div class="col-md-9 logo">
				<a href="{{ URL::to('home') }}" class="hidden-xs hidden-sm"><img class="mob_img" src="{{ URL::asset('asset/images/logo2.jpg')}}"></a>
				<a href="{{ URL::to('home') }}" class="hidden-md hidden-lg"><img src="{{ URL::asset('asset/images/mob.jpg')}}"></a>
			</div>

			<div class="col-md-3">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
						<ul class="socnet hidden-xs hidden-sm" >
							<li>
								<a href="https://uk.wikipedia.org/wiki/%D0%9D%D0%B0%D1%86%D1%96%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D0%B8%D0%B9_%D0%BF%D1%80%D0%B8%D1%80%D0%BE%D0%B4%D0%BD%D0%B8%D0%B9_%D0%BF%D0%B0%D1%80%D0%BA_%C2%AB%D0%A6%D1%83%D0%BC%D0%B0%D0%BD%D1%81%D1%8C%D0%BA%D0%B0_%D0%BF%D1%83%D1%89%D0%B0%C2%BB" class="Wikipedia" target="_blank">
									<i class="fa fa-wikipedia-w fa-2x"></i>
								</a>
							</li>
							<!-- li>
                                <a href="#" class="Twitter" target="_blank">
                                    <i class="fa fa-twitter fa-2x"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://vk.com/tsumanska_pushcha" class="Google Plus" target="_blank">
                                    <i class="fa fa-vk fa-2x"></i>
                                </a>
                            </li -->
							<li>
								<a href="https://www.facebook.com/npptsuman/" class="Facebook" target="_blank">
									<i class="fa fa-facebook fa-2x"></i>
								</a>
							</li>

						</ul>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 input-group search-form">
						{!! Form::open(array('method' => 'get', 'route' => 'search')) !!}
						{!! Form::text('search', null, array('class' => 'search-text', 'autocomplete' => "off", 'placeholder' => 'Пошук')) !!}
						<button class="search-submit" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>	<!--navigation-->
		<div class="rowmenu">
			<div class="container">
				<div class="navbar-default navbar-fixed">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Меню</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<nav class="collapse navbar-collapse" role="navigation">
						<div id="menu" class="menu1">
							<ul class="nav navbar-nav">
								<li><a href="{{ URL::to('') }}">Головна</a></li>
								<li><a href="{{ URL::to('news') }}">Новини</a></li>
								<li  class="dropdown">
									<a class="forcursor" data-toggle="dropdown">Про парк<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="{{ URL::to('article/creating') }}">Історія створення</a></li>
										<li><a href="{{ URL::to('article/fizgeo') }}">Фізико-географічні умови</a></li>
										<li><a href="{{ URL::to('article/biodiv') }}">Біорізноманіття</a></li>
										<li><a href="{{ URL::to('article/hist-cult') }}">Історико культурна спадщина</a></li>
										<li><a href="{{ URL::to('administration') }}">Адміністрація</a></li>
										<li><a href="{{ URL::to('matherials') }}">Матеріали</a></li>
										<li><a href="{{ URL::to('article/help') }}">Допомога</a></li>
									</ul>
								</li>
								<li>
									<a href="{{ isset($homelink) ? "" : "/" }}#activity">Напрямки діяльності</a>
								</li>
								<li class="dropdown">
									<a class="dropdown-toggle forcursor" data-toggle="dropdown">Туризм і відпочинок <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="{{ URL::to('article/routes') }}">Туристичні маршрути</a></li>
										<li><a href="{{ URL::to('article/eco-paths') }}">Екологічні стежки</a></li>
										<li><a href="{{ URL::to('article/interesting') }}">Цікаві об'єкти</a></li>
										<li><a href="{{ URL::to('article/rules') }}">Правила поведінки</a></li>
										<li><a href="{{URL::to('article/infrastr') }}">Туристична інфраструктура</a></li>
										<li><a href="{{URL::to('article/events') }}">Наші заходи</a></li>
									</ul>
								</li>
								<li><a href="{{ URL::to('gallery') }}">Галерея</a></li>
								<li><a href="{{ isset($homelink) ? "" : "/" }}#contacts">Зворотний зв'язок</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<!--end_navigation-->
	</header>
	<!--контент сторінки-->
	<div class="error container">
		<div class="row row_article">
			<br>
			<p class="error-header">404<br> Page not found</p>
			<br>
			<h3>Сторінка видалена, переміщена, або ще не створена.</h3>
			<br>
		</div>
		<!--bigmir)net TOP 100-->
		<div  class="counter" >
			<script type="text/javascript" language="javascript" src="{{URL::asset('asset/js/bigmirBM_Draw.js')}}"></script>
			<script type="text/javascript" language="javascript" src="{{URL::asset('asset/js/bigmir.js')}}"></script>
			<noscript>
				<a href="http://www.bigmir.net/" target="_blank"><img src="//c.bigmir.net/?v16950539&s16950539&t2" width="88" height="31" alt="bigmir)net TOP 100" title="bigmir)net TOP 100" border="0" /></a>
			</noscript>
			<!--bigmir)net TOP 100-->
		</div>
	</div>

</div>
<!--підвал-->
<!--підвал-->

<div class="footer">
	<div class="container confoot">
		<div class="col-sm-12">
			<div class="col-sm-6" align="center">
				<a href="{{ URL::to('/') }}">Головна</a> | <a href="{{ isset($homelink) ? "" : "/" }}#contacts">Контакти</a>
			</div>
			<div class="col-sm-6" align="center">
				<p>© {{date("Y")}} НПП "Цуманська пуща". All rights reserved</p>
			</div>
		</div>
	</div>
</div>
<div id="toTop" class="btn btn-danger"><i class="fa fa-arrow-up" aria-hidden="true"></i>
	Догори</div>
</body>
</html>