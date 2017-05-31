@extends('app')
@section('content')
@if(count($first) != 0) <!--  перевірка чи є новини-->
<div class="content">
	<h2 class="newstitle" align="center">Новини</h2>
	<hr>
	<div class="container" align="center">
		<div class=row>
		@foreach($first as $f)
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="thumbnail" >
					<img src="{{$f->small_img}}" alt='Ooops... Зображення не завантажилось' >
						<div class="caption">
							<h4>{{$f->title}}</h4>
							<p align="justify">{{mb_substr($f->content,0,200)}}
								</br>					
								<a href="{{URL::to('news/'.$f->url)}}" target="_blanc">Читати далі...</a>
							</p>
						</div>
				</div>
			</div>
		@endforeach
		</div>
		<div class="page">
			<nav>
				{!! $first->setPath('')->render() !!}
			</nav>
		</div>
	</div>	
</div>
@else
<div class="container" align="center">
	<div class="rowcontent">
		<div class="article">
			<h3>Новини тимчасово відсутні</h3>
		</div>
	</div>
</div>
@endif
@stop