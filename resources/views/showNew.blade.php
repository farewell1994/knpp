@extends('app')
@section('title')
@if(!empty($new->title))
<title>{{$new->title}}</title>
@else
<title>Національний природний парк "Цуманська пуща"</title>
@endif
@stop
@section('content')
@if($new!=null) <!--  перевірка чи є новина-->
<div class="container">
	<div class="rowcontent">
		<div class="article">
			<br>
			<h3 class="newtitle" align="center">{{$new->title}}</h3>
			<hr>
			<p align="justify">{!!$new->content!!}</p>
			<br>
		</div>
		<div class="row">
			<?php $imgs = explode('*',$new->links);?>
			@if($imgs[0]!=null)
			@foreach($imgs as $img)
			<div class="col-xs-12 col-md-3 col-sm-6 thumb">
				<a class="fancyimage" rel="group" href="{{$img}}">
					<p><img class="img-responsive" src="{{$img}}" alt="Ooops... Зображення не завантажилось"></p>
				</a>
			</div>
			@endforeach
			@endif
		</div>
	</div>
</div>
@else
<div class="container" align="center">
	<div class="rowcontent">
		<div class="article">
			<br>
			<h3>Новину не знайдено</h3>
			<br>
		</div>
	</div>
</div>
@endif
@stop