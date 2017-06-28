@extends('app')
@section('title')
@if(!empty($new->title))
<title>{{$new->title}}</title>
		<meta property="og:url"           content='{{"http://knpp.com.ua/public/".Request::path()}}' />
		<meta property="og:type"          content="website" />
		<meta property="og:title"         content="{{$new->title}}" />
		<meta property="og:description"   content="{{$new->description}}" />
		<meta property="og:image"         content="{{ URL::asset('asset/images/cp.jpg')}}" />
@else
<title>Національний природний парк "Цуманська пуща"</title>
@endif
@stop
@section('content')
@if($new!=null) <!--  перевірка чи є новина-->
<div class="container">
	<div class="rowcontent">
		<div class="article" align="justify">
			<br>
			<h3 class="newtitle" align="center">{{$new->title}}</h3>
			<hr>
			<p>{!!$new->content!!}</p>
			<br>
		</div>
		<div class = "row">
			<div class="fb-share-button" data-href = "{{"http://knpp.com.ua/public/".Request::path()}}" data-layout="button_count" data-size="large" data-mobile-iframe="true">
				<a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u&amp;src=sdkpreparse">Поділитись
				</a>
			</div>
		</div>
			<br>
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
			<h3>Новину не знайдено</h3>
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