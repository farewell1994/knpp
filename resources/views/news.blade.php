@extends('app')
@section('title')
<title>Новини | Національний природний парк Цуманська пуща</title>
@stop
@section('content')
@if(count($first) != 0) <!--  перевірка чи є новини-->
<div class="content">
	<h2 class="newstitle" align="center">Новини</h2>
	<hr>
	<div class="container" align="justify">
		<div class=row>
		@foreach($first as $f)
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="thumbnail" >
					<img src="{{$f->small_img}}" alt='Ooops... Зображення не завантажилось' >
						<div class="caption">
							<h4 align="center">{{$f->title}}</h4>
							<p>{{mb_substr($f->description, 0, 215)}}</p>					
							<a href="{{URL::to('news/'.$f->url)}}" target="_blanc">Читати далі...</a>
						</div>
				</div>
			</div>
		@endforeach
		</div>
		<div class="page" align="center">
			<nav>
				{!! $first->setPath('')->render() !!}
			</nav>
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
</div>
@else
<div class="container" align="center">
	<div class="rowcontent">
		<div class="article">
			<br>
			<h3>Новини тимчасово відсутні</h3>
			<br>
		</div>
	</div>
</div>
@endif
@stop