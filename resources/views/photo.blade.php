@extends('app')
@section('content')
<?php
	if($page == "fauna"){$curPage="Фауна";}
	elseif($page == "flora"){$curPage="Флора";}
	else{$curPage="Краєвиди";}
?>
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
		<h3>{{$curPage}}</h3>
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
			<h3>Фото тимчасово відсутні</h3>
		</div>
	</div>
</div>
@endif
@stop