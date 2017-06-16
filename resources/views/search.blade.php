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
		<h3> Знайдено новин: {{count($news)}}</h3>
		<hr>
		<ol class="math">
			@foreach($news as $n)
			<li>
				<a href="{{'news/'.$n->url}}" target="_blank">{{$n->title}}</a>
				<br>
			</li>
			@endforeach
		</ol>
		<h3> Знайдено статей: {{count($articles)}}</h3>
		<hr>
		<ol class="math">
			@foreach($articles as $a)
			<li>
				<a href="{{'article/'.$a->url}}" target="_blank">{{$a->title}}</a>
				<br>
			</li>
			@endforeach
		</ol>
		<br>
	</div>
</div>
@stop