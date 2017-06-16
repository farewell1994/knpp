@extends('app')
@section('title')
<title>Галерея | Національний природний парк Цуманська пуща</title>
@stop
@section('content')
<h3>
	Світлини / <a class="gallerylinks" href="{{URL::to('video')}}">Відео</a>
</h3>
<h4 align="center">
	<a class="gallerylinks" href="{{URL::to('gallery/fauna')}}">Фауна</a> / 
	<a class="gallerylinks" href="{{URL::to('gallery/flora')}}">Флора</a> / 
	<a class="gallerylinks" href="{{URL::to('gallery/lands')}}">Краєвиди</a>
</h4>
<hr>
@if(count($photo) != 0) <!--  перевірка чи є фото-->
<div class="container">
	<div class="row row_article">
		@if($page=='fauna')
		<h3>Фауна</h3>
		@elseif($page=='flora')
		<h3>Флора</h3>
		@elseif($page=='lands')
		<h3>Краєвиди</h3>
		@else
		@endif
		<hr>
		@foreach($photo as $p)
		<div class="col-md-3 col-sm-4 col-xs-6 thumb">
			<a class="fancyimage" rel="group" href="{{$p->link}}" title="{{$p->capture}}">
				<p>
					<img class="img-responsive" src="{{$p->link}}" alt="Ooops... Зображення не завантажилось">
				</p>
			</a>
				<div class="namef">
					<p align="center">{{$p->capture}}</p>
				</div>
		</div>
@endforeach
	</div>
</div>
@else
<div class="container" align="center">
	<div class="rowcontent">
		<div class="article">
			<br>
			<h3>Фото тимчасово відсутні</h3>
			<br>
		</div>
	</div>
</div>
@endif
@stop