@extends('app')
@section('content')
@if($article!=null) <!--  перевірка чи є така стаття-->
<div class="container" align="justify">
	<div class="rowcontent">
		<div class="article">
			<h3 class="titleh3" align="center">{{$article->title}}</h3>
			<p align="justify">{!!$article->text!!}</p>
		</div>
		<div class="row">
			<?php $imgs = explode('*',$article->links);?>
			@if(!empty($imgs))
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