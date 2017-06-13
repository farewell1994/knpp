@extends('app')
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