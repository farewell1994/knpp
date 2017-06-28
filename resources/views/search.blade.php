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