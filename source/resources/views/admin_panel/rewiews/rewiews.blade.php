@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent">
                        <li class="breadcrumb-item"><a href="/admin">Администратор</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><strong>Отзывы</strong></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    @if(!empty($rewiews))
        <div class="container">

            <div class="col-4 mb-4">
                <a href="{{ action('RewiewController@create') }}" class="btn btn-primary m-1"><strong>Добавить новый отзыв</strong></a>
            </div>

            <div class="row">

                @forelse($rewiews as $rewiew)


                    <div class="card bg-dark text-white-50 col-3 mx-1">
                        <img src="{{ asset('/storage/uploaded_images/rewiews/' .  $rewiew->img) }}" class="card-img" alt="{{ $rewiew->title }}">
                        <div class="card-body">
                            <h5 class="card-title"><strong>{{ $rewiew->title }}</strong></h5>
                            <a href="/rewiews/{{ $rewiew->id }}/edit" class="btn-sm">Редактировать</a>
                            <a href="/rewiews/{{ $rewiew->id }}/delete" onclick="return confirm('Вы уверены, что хотите удалить просмотр?')" class="btn-sm">Удалить</a>
                        </div>
                    </div>

                @empty
                    <h5>Отзывы пока не загружены</h5>
                @endforelse

            </div>
        </div>
    @endif

@endsection
