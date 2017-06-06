@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Авторизація</div>

                <div class="panel-body">
                    <p>
						Ви вже авторизовані. Для виходу натисніть на кнопку в правому верхньому кутку
					</p>
					<p>
						Для переходу на головну сторінку натисніть <a href={{URL::to('index')}}>тут</a>
					</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
