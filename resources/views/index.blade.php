@extends('app')
@section('title')
<title>Національний природний парк Цуманська пуща</title>
@stop
@section('content')
<!--slider-->
<div id="carousel" class="carousel slide" data-interval="0" align="center">
<!--слайди-->
	<div class="carousel-inner">
		<div class="item active">
			<img src="{{URL::asset('asset/images/1.jpg')}}">
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
			<br>
			<h3 class="titleh3" align="center">{{$article->title}}</h3>
			<hr>
			<p align="justify">{!!$article->text!!}</p>
		</div>
		<br>
		<div class="row">
			<?php $imgs = explode('*',$article->links);?>
			@if($imgs[0]!=null)
			@foreach($imgs as $img)
				<div class="col-xs-12 col-md-3 col-sm-6 thumb">
					<a class="fancyimage" rel="group" href="{{$img}}">
						<p>
							<img class="img-responsive" src="{{$img}}" alt="Ooops... Зображення не завантажилось">
						</p>
					</a>
				</div>
			@endforeach
			@endif
		</div>
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
@else
<div class="container" align="center">
	<div class="rowcontent">
		<div class="article">
			<br>
			<h3>Контент тимчасово відсутній</h3>
			<br>
		</div>
	</div>
</div>
@endif
@stop