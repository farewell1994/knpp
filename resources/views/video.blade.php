@extends('app')
@section('title')
<title>Відео | Національний природний парк "Цуманська пуща"</title>
@stop
@section('content')
<h3>
	<a class="gallerylinks" href="{{URL::to('gallery')}}">Світлини / </a>Відео
</h3>
<hr>
@if(count($video) != 0) <!--  перевірка чи є відео-->
<div class="container">
	<div class="row row_article">
		@foreach($video as $v)
		<iframe class="youtube" width="85%" height="400px" src="https://www.youtube.com/embed/{{$v->link}}" frameborder="0" allowfullscreen></iframe>";
		@endforeach
	</div>
</div>
@else
<div class="container" align="center">
	<div class="rowcontent">
		<div class="article">
			<br>
			<h3>Відео тимчасово відсутні</h3>
			<br>
		</div>
	</div>

</div>
@endif
@stop