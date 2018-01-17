@extends('app')
@section('title')
<title>Національний природний парк Цуманська пуща</title>
@stop
@section('content')
<!--slider-->
<div id="carousel" class="carousel slide hidden-xs hidden-sm" data-interval="0" align="center">
<!--слайди-->
	<div class="carousel-inner">
		<div class="item active">
			<img src="{{URL::asset('asset/images/1.jpg')}}">
		</div>
		<div class="item">
			<img src="{{URL::asset('asset/images/2.jpg')}}">
		</div>
		<div class="item">
			<img src="{{URL::asset('asset/images/3.jpg')}}">
		</div>
		<div class="item">
			<img src="{{URL::asset('asset/images/4.jpg')}}">
		</div>
		<div class="item">
			<img src="{{URL::asset('asset/images/5.jpg')}}">
		</div>
		<div class="item">
			<img src="{{URL::asset('asset/images/6.jpg')}}">
		</div>
		<div class="item">
			<img src="{{URL::asset('asset/images/7.jpg')}}">
		</div>
		<div class="item">
			<img src="{{URL::asset('asset/images/8.jpg')}}">
		</div>
		<div class="item">
			<img src="{{URL::asset('asset/images/9.jpg')}}">
		</div>
		<div class="item">
			<img src="{{URL::asset('asset/images/10.jpg')}}">
		</div>
		<div class="item">
			<img src="{{URL::asset('asset/images/11.jpg')}}">
		</div>
		<div class="item">
			<img src="{{URL::asset('asset/images/12.jpg')}}">
		</div>
	</div>
	<!--перемикання слайдів-->
	<a href="#carousel" class="left carousel-control" data-slide="prev">
		<i class="glyphicon glyphicon-chevron-left"></i>
	</a>
	<a href="#carousel" class="right carousel-control" data-slide="next">
		<i class="glyphicon glyphicon-chevron-right"></i>
	</a>
</div> <!--end_slider-->
@if($article!=null) <!--  перевірка чи є така стаття-->
<div class="container" align="justify">
	<div class="rowcontent">
		<div class="article">
			<br>
			<h3 class="titleh3" align="center">{{$article->title}}</h3>
			<hr>
			<p class="begin">Ківерцівський національний природний парк "Цуманська пуща" створений на території Ківерцівського району Волинської області на площі 34467,89 гектара земель, у тому числі 3472,71 гектара земель, що вилучаються та надаються йому в постійне користування, та 30995,18 гектара земель, що включаються до його складу без вилучення у землекористувачів. Ківерцівський національний природний парк "Цуманська пуща" створений з метою збереження цінних природних та історико–культурних комплексів. Територія парку характеризується різноманіттям видів ландшафтів та місцевостей, представників флори і фауни. Парк створений на базі водно-болотних угідь і лісових масивів Ківерцівського району, на крайній межі Українського Полісся, що розташований у межиріччі Стиру і Горині. Це оригінальний природний комплекс, який сформувався на більш багатих, ніж на півночі Полісся ґрунтах. Нині це праліси дубових та сосново-дубових лісів, які утворюють своєрідний комплекс із болотами різних типів та ділянками лук по водотоках, чорновільшняками, заплавами річок. Цей природний комплекс зберігає надзвичайно багате біорізноманіття, тут наявні рідкісні види рослин і тварин, а болота вражають своєрідною флорою та фауною. Тривалий час ці природні комплекси та їх біорізноманіття залишалися не достатньо вивчені.</p>
			<div id="more">
				<a class="toggle-article" href="#">Читати всю статтю</a>
			</div>
			<br>
			<br>
			<div style="display: none;" class="all">
				<p  align="justify">{!!$article->text!!}</p>
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
				@else
					@foreach($photos as $p)
						@if($p->info())
							<div class="col-xs-12 col-md-3 col-sm-6 thumb">
								<a class="fancyimage" rel="group" href="http://knpp.com.ua/public/images/{{$p->getPath()}}">
									<p>
										<img class="img-responsive" src="http://knpp.com.ua/public/images/{{$p->getPath()}}" alt="Ooops... Зображення не завантажилось">
									</p>
								</a>
							</div>
						@endif
					@endforeach
				@endif
			</div>
		</div>
		<br>
		<div id="activity" class="row">
			<h2 align="center">Напрями діяльності парку</h2>
            <p class="text-center text-info">(Посилання на детальні статті виділені зеленим кольором)</p>
			<hr>
			<div class="activity">
				<div class="row part">
                    <div class="col-sm-5 col-md-4">
                        <a href="{{ URL::to('article/science') }}">
                            <img src="http://knpp.com.ua/images/articles/9MOWJ6Oe7g.jpeg">
                        </a>
                    </div>
                    <div class="col-sm-7 col-md-8">
                        Основними завданнями
                        <a href="{{ URL::to('article/recreation') }}">
                            наукової та науково-технічної діяльності
                        </a> Ківерцівського НПП «Цуманська пуща»
                        є здійснення фундаментальних та прикладних наукових досліджень функціонування екосистем в умовах заповідних режимів.
                    </div>
				</div>
				<div class="row part">
                    <div class="col-sm-5 col-md-4">
                        <a href="{{ URL::to('article/eco-edu') }}">
                            <img src="http://knpp.com.ua/images/articles/Pt8a7mq8DS.jpeg">
                        </a>
                    </div>
                    <div class="col-sm-7 col-md-8">
                        <a href="{{ URL::to('article/recreation') }}">
                            Еколого-освітня частина
                        </a>
                         є структурним підрозділом Парку, а саме належить відділу
                        «Еколого-освітньої та рекреаційно роботи».
                    </div>
				</div>
				<div class="row part">
                    <div class="col-sm-5 col-md-4">
                        <a href="{{ URL::to('article/nat-def') }}">
                            <img src="http://knpp.com.ua/images/articles/6gTtkejI3V.jpeg">
                        </a>
                    </div>
                    <div class="col-sm-7 col-md-8">
                        Відділ
                        <a href="{{ URL::to('article/recreation') }}">
                            державної охорони природно-заповідного
                        </a>
                         фонду,
                        створений для забезпечення додержання режиму охорони територій та об'єктів природно-заповідного фонду України,
                        попередження та припинення порушень природоохоронного законодавства.
                    </div>
				</div>
				<div class="row part">
                    <div class="col-sm-5 col-md-4">
                        <a href="{{ URL::to('article/recreation') }}">
                            <img src="http://knpp.com.ua/images/articles/SBvriqH70e.jpeg">
                        </a>
                    </div>
                    <div class="col-sm-7 col-md-8">
                        <a href="{{ URL::to('article/recreation') }}">
                            Рекреаційна частина
                        </a>
                        є структурним підрозділом Парку, а саме належить відділу
                        «Еколого-освітньої та рекреаційно роботи».
                    </div>
				</div>
				<div class="row part">
                    <div class="col-sm-5 col-md-4">
                        <a href="{{ URL::to('article/reproduction') }}">
                            <img src="http://knpp.com.ua/images/articles/Zhj2bKTR8i.jpeg">
                        </a>
                    </div>
                    <div class="col-sm-7 col-md-8">
                        Відділ
                        <a href="{{ URL::to('article/recreation') }}">
                            відтворення та збереження
                        </a>
                          рослинного та
                        тваринного світу Ківерцівського національного природного парку (НПП) "Цуманська пуща"
                    </div>
				</div>
			</div>
		</div>
		<div id="contacts" class="row">
			<h2 align="center">Контакти</h2>
				<hr>
				<div class="col-md-6 info-link">
					<div class="info">
						<p class="text-center info-header">Ківерцівський національний природний парк «Цуманська пуща»</p><br>
						<p class="info_p"><b>Юридична адреса:</b> 45200, Волинська обл., м. Ківерці, вул. Незалежності, 20.</p>
						<p class="info_p"><b>Фактична адреса:</b> 45200, Волинська обл., м. Ківерці, вул. Незалежності, 18.</p>
						<p class="info_p"><b>Телефон:</b>  +380-33-65-403-33.</p>
						<p class="info_p"><b>Офіційний e-mail:</b> <a href="mailto:nppkiv.tsumanpushcha@ukr.net">nppkiv.tsumanpushcha@ukr.net</a></p>
						<p class="info_p"><b>e-mail:</b> <a href="mailto:kivertsi.npp@gmail.com">kivertsi.npp@gmail.com</a></p>
						<!--<p><b>Вконтакте:</b> <a href="https://vk.com/tsumanska_pushcha" target="_blank">https://vk.com/tsumanska_pushcha</a></p>-->
						<p class="info_p"><b>Facebook:</b> <a href="https://www.facebook.com/npptsuman" target="_blank">https://www.facebook.com/npptsuman</a></p>
					</div>
					<div class="link">
						<div class="links">
							<p class="text-center">Корисні посилання</p>
							<a class="btn btn-default" href="http://www.menr.gov.ua/" target="_blank">Міністерство екології та природних ресурсів України</a><br>
							<a class="btn btn-default" href="http://pzf.menr.gov.ua/" target="_blank">Природно-заповідний фонд</a><br>
							<a class="btn btn-default" href="http://www.ukrpryroda.org/" target="_blank">Українське товариство охорони природи</a><br>
							<a class="btn btn-default" href="http://voladm.gov.ua/" target="_blank">Волинська ОДА</a><br>
							<a class="btn btn-default" href="http://voldei.gov.ua/" target="_blank">Державна екологічна інспекція у Волинській області </a>
						</div>
					</div>
				</div>
				<div class="col-md-6 map">
					<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5039.744997698103!2d25.459989651809813!3d50.833525554970315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472593ee7c34eca1%3A0xa712b4295baa790b!2z0LLRg9C70LjRhtGPINCd0LXQt9Cw0LvQtdC20L3QvtGB0YLRliwgMTgsINCa0ZbQstC10YDRhtGWLCDQktC-0LvQuNC90YHRjNC60LAg0L7QsdC70LDRgdGC0YwsIDQ1MjAx!5e0!3m2!1sru!2sua!4v1483568132442" width="100%" height="571px" frameborder="0" style="border: 1px solid green" allowfullscreen></iframe>
				</div>
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
</div>
@endif
@stop