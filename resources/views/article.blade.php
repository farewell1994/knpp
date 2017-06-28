@extends('app')
@section('title')
@if(!empty($article->title))
<title>{{$article->title}}</title>
@else
<title>Національний природний парк "Цуманська пуща"</title>
@endif
@stop
@section('content')
@if($article!=null) <!--  перевірка чи є така стаття-->
@if($article->url == "hist-cult" or $article->url == "rules")
<div class="container" align="center">
@else
<div class="container" align="justify">
@endif
	<div class="rowcontent">
		<div class="article">
			<br>
			<h3 class="titleh3" align="center">{{$article->title}}</h3>
			<hr>
			@if($article->url == "hist-cult" or $article->url == "rules")
			<p align="center">{!!$article->text!!}</p>
			@else
			<p align="justify">{!!$article->text!!}</p>
			@endif
			<br>
		</div>
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
@endif
@stop