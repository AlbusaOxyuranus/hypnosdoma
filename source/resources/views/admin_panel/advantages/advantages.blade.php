@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent">
                        <li class="breadcrumb-item"><a href="/admin">Администратор</a></li>
                        <li class="breadcrumb-item active" aria-current="page">преимущества</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container mb-4">
        <div class="row">
            <div class="col-3 text-left">
                <a href="{{ action('AdvantageController@create') }}" class="btn btn-primary m-1">Добавое преимущество</a>
            </div>

            @if(count($advantages) > 0)
                <div class="col-3 text-right">
                    <a href="/advantages/show_dont_show/{{ $show = 0 }}" class="btn btn-secondary m-1">Скрыть все</a>
                </div>

                <div class="col-3 text-left">
                    <a href="/advantages/show_dont_show/{{ $show = 1 }}" class="btn btn-secondary m-1">Показать все</a>
                </div>

                <div class="col-3 text-right">
                    <a href="{{ action('AdvantageController@delete_all') }}" class="btn btn-danger m-1">Удалить все преимущества</a>
                </div>
            @endif
        </div>
    </div>

    @if(!empty($advantages))
        <div class="container">

                @forelse($advantages as $advantage)

                    <div class="card mb-3 border shadow" style="height: 200px">
                        <div class="row no-gutters">
                            <div class="col-md-2 text-center">
                                <img src="{{ asset('/storage/uploaded_images/advantages/' .  $advantage->image_name) }}" class="img-fluid w-75" alt="...">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $advantage->title }}</h5>
                                    <p class="card-text">{!!  Illuminate\Support\Str::limit($advantage->description, $limit = 100, $end = '...') !!}</p>
                                    <p class="card-text"><strong>@if($advantage->show == '0') СКРЫТО @else ОТОБРАЖАЕТСЯ @endif</strong></p>
                                    <p><div class="row ">
                                        <div class="col-10 text-right">
                                            <a href="/advantages/{{ $advantage->id }}/edit" class="btn btn-secondary">Редактировать</a>
                                        </div>

                                        <div class="col-2 text-right">
                                            <a href="/advantages/{{ $advantage->id }}/delete" class="btn btn-danger">Удалить</a>
                                        </div>
                                    </div></p>
                                </div>
                            </div>
                        </div>
                    </div>

                @empty
                    <h5>Преимущества пока не созданы</h5>
                @endforelse

        </div>
    @endif

@endsection