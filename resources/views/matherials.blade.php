@extends('app')
@section('title')
<title>Матеріали | Національний природний парк Цуманська пуща</title>
@stop
@section('content')
@if(count($maths) != 0) <!--  перевірка чи є матеріали-->
<div class="container" align="justify">
	<div class="rowcontent">
			<br>
			<h3>Матеріали</h3>
			<hr>
			<ul class="math">
			@foreach($maths as $link)
				<li>
					<a href="{{$link->link}}"  target="_blank">{{$link->title}}</a>
				</li>
			@endforeach
			</ul>
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
			<h3>Матеріали тимчасово відсутні</h3>
			<br>
		</div>
	</div>
</div>
@endif
@stop