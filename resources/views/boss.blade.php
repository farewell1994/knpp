@extends('app')
@section('title')
<title>Керівництво | Національний природний парк Цуманська пуща</title>
@stop
@section('content')
@if(count($boss) != 0) <!--  перевірка чи є інфа-->
<div class="container" align="center">
	<div class="rowcontentadm">
		<br><br>				
		<h3 class="titleh3" align="center">Адміністрація</h3>
		<p align="justify">
		<br><hr>
			<div class="row">
				@foreach($boss as $b)
				@if(!empty($b->photo))
				<div class="adm col-sm-6 col-xs-12">
					<div class="as">
						<img src="{{$b->photo}}"  style="" alt="Ooops... Зображення не завантажилось">
						<div class="nameadm">
							<p align="center"><b>{{$b->position}}</b><br><u>{{$b->fio}}</u></p>
						</div>
					</div>
				</div>
				@endif
				@endforeach
			</div>
			<br>
			<br>
			<div class=row">
				<p align="center">
					<br>
					@foreach($boss as $b)
					@if(empty($b->photo))
					<b>{{$b->position}}</b> - <u>{{$b->fio}}</u><br><br>
					@endif
					@endforeach
				</p>
			</div>
		</p>		
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
			<h3>Інформація тимчасово відсутня</h3>
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