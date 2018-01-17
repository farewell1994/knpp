@extends('app')
@section('title')
<title>Пошук | Національний природний парк Цуманська пуща</title>
@stop
@section('content')
<div class="container" align="justify">
	<div class = "rowcontent">
		<br>
		<h3> Ключ пошуку: <i>{{$key}}</i></h3>
		<hr>
		<h3> Новини </h3>
		<hr>
		@if(count($news)>0)
		<ul class="search-news">
			@foreach($news as $n)
			<li>
				<p class="search_header">{{$n->title}}</p>
				<p class="search_desc">{{$n->description}}</p>
				<a class="btn btn-success btn-xs" href="{{'news/'.$n->url}}" target="_blank">Перейти до новини</a>
				<hr>
			</li>
			@endforeach
		</ul>
		@else
			<p>Нічого не знайдено</p>
		@endif
		<div class="page" align="center">
			<nav>
				{!! $news->appends(['search' => $key])->render() !!}
			</nav>
		</div>
		<h3> Статті </h3>
		<hr>
		@if(count($articles)>0)
		<ul class="search-articles">
			@foreach($articles as $a)
			<li>
				<a href="{{'article/'.$a->url}}" target="_blank">{{$a->title}}</a>
				<br>
			</li>
			@endforeach
		</ul>
		<br>
		@else
		<p>Нічого не знайдено</p>
		@endif
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
@stop