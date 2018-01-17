@extends('app')
@section('title')
<title>Галерея | Національний природний парк Цуманська пуща</title>
@stop
@section('content')
@if(count($photo) != 0) <!--  перевірка чи є фото-->
<div class="container">
	<div class="row gallery-content">
		@if($page=='fauna')
			<h4 align="center">
				<a class="gallerylinks btn btn-success" href="{{URL::to('gallery/fauna')}}">Фауна</a>
				<a class="gallerylinks btn btn-default" href="{{URL::to('gallery/flora')}}">Флора</a>
				<a class="gallerylinks btn btn-default" href="{{URL::to('gallery/lands')}}">Краєвиди</a>
				<a class="btn btn-info video-link" href="{{URL::to('video')}}">Відео</a>
			</h4>
		@elseif($page=='flora')
			<h4 align="center">
				<a class="gallerylinks btn btn-default" href="{{URL::to('gallery/fauna')}}">Фауна</a>
				<a class="gallerylinks btn btn-success" href="{{URL::to('gallery/flora')}}">Флора</a>
				<a class="gallerylinks btn btn-default" href="{{URL::to('gallery/lands')}}">Краєвиди</a>
				<a class="btn btn-info video-link" href="{{URL::to('video')}}">Відео</a>
			</h4>
		@elseif($page=='lands')
			<h4 align="center">
				<a class="gallerylinks btn btn-default" href="{{URL::to('gallery/fauna')}}">Фауна</a>
				<a class="gallerylinks btn btn-default" href="{{URL::to('gallery/flora')}}">Флора</a>
				<a class="gallerylinks btn btn-success" href="{{URL::to('gallery/lands')}}">Краєвиди</a>
				<a class="btn btn-info video-link" href="{{URL::to('video')}}">Відео</a>
			</h4>
		@else
		@endif
		@foreach($photo as $p)
					<div class=" col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb">
						<a class="fancyimage" rel="group" href="http://knpp.com.ua/public/images/{{$p->photo->getPath()}}" title="{{$p->capture}}">
							<p>
								<img class="img-responsive" src="http://knpp.com.ua/public/images/{{$p->photo->getPath()}}" alt="Ooops... Зображення не завантажилось">
							</p>
							<div class="namef">
								<p class="btn btn-success btn-xs" align="center">{{$p->capture}}</p>
							</div>
						</a>

					</div>
        @endforeach

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
			<h3>Фото тимчасово відсутні</h3>
			<br>
		</div>
	</div>
</div>
@endif
@stop