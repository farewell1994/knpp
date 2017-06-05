@extends('app')
@section('content')
<!--slider-->
<div id="carousel" class="carousel slide" data-interval="0" align="center">
<!--слайди-->
	<div class="carousel-inner">
		<div class="item active">
			<img src="{{URL::asset('asset/images/1.jpg')}}" alt="">
		</div>
		<div class="item">
			<img src="{{URL::asset('asset/images/2.jpg')}}">
		</div>
		<div class="item">
			<img src="{{URL::asset('asset/images/3.jpg')}}">
		</div>
		<div class="item">
			<img src="{{URL::asset('asset/images/4.jpg')}}">
		</div>
		<div class="item">
			<img src="{{URL::asset('asset/images/5.jpg')}}">
		</div>
		<div class="item">
			<img src="{{URL::asset('asset/images/6.jpg')}}">
		</div>
		<div class="item">
			<img src="{{URL::asset('asset/images/7.jpg')}}">
		</div>
		<div class="item">
			<img src="{{URL::asset('asset/images/8.jpg')}}">
		</div>
		<div class="item">
			<img src="{{URL::asset('asset/images/9.jpg')}}">
		</div>
		<div class="item">
			<img src="{{URL::asset('asset/images/10.jpg')}}">
		</div>
		<div class="item">
			<img src="{{URL::asset('asset/images/11.jpg')}}">
		</div>
		<div class="item">
			<img src="{{URL::asset('asset/images/12.jpg')}}">
		</div>
	</div>
	<!--перемикання слайдів-->
	<a href="#carousel" class="left carousel-control" data-slide="prev">
		<i class="glyphicon glyphicon-chevron-left"></i>
	</a>
	<a href="#carousel" class="right carousel-control" data-slide="next">
		<i class="glyphicon glyphicon-chevron-right"></i>
	</a>
</div> <!--end_slider-->
@if($article!=null) <!--  перевірка чи є така стаття-->
<div class="container" align="justify">
	<div class="rowcontent">
		<div class="article">
			<h3 class="titleh3" align="center">{{$article->title}}</h3>
			<p align="justify">{!!$article->text!!}</p>
		</div>
		<div class="row">
			<?php $imgs = explode('*',$article->links);?>
			@foreach($imgs as $img)
				<div class="col-xs-12 col-md-3 col-sm-6 thumb">
					<a class="fancyimage" rel="group" href="{{$img}}">
						<p>
							<img class="img-responsive" src="{{$img}}" alt="Ooops... Зображення не завантажилось">
						</p>
					</a>
				</div>
			@endforeach
		</div>
	</div>
</div>
@else
<div class="container" align="center">
	<div class="rowcontent">
		<div class="article">
			<h3>Контент тимчасово відсутній</h3>
		</div>
	</div>
</div>
@endif
@stop