@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent">
                        <li class="breadcrumb-item"><a href="/admin">Администратор</a></li>
                        <li class="breadcrumb-item active" aria-current="page">События</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container mb-4">
        <div class="row">
            <div class="col-3 text-left">
                <a href="{{ action('EventController@create') }}" class="btn btn-primary m-1">Добавить событие</a>
            </div>

            @if(count($events) > 0)
                <div class="col-3 text-right">
                    <a href="/events/show_dont_show/{{ $show = 0 }}" class="btn btn-secondary m-1">Скрыть все</a>
                </div>

                <div class="col-3 text-left">
                    <a href="/events/show_dont_show/{{ $show = 1 }}" class="btn btn-secondary m-1">Показать все</a>
                </div>

                <div class="col-3 text-right">
                    <a href="{{ action('EventController@delete_all') }}" class="btn btn-danger m-1">Удалить все события</a>
                </div>
            @endif
        </div>
    </div>

    @if(!empty($events))
        <div class="container">

            <div class="row">
                @forelse($events as $event)

                    <div class="card col-6">
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->title }}, {{ date('d', strtotime($event->date)) }} {{ \App\Http\Controllers\HomeController::MONTH_STRINGS[(int)(date('m', strtotime($event->date)))] }} {{ date('Y', strtotime($event->date)) }}</h5>
                            <div class="card-subtitle m-2 text-center"><strong>@if($event->show == '0') СКРЫТО @else ОТОБРАЖАЕТСЯ @endif</strong></div>
                            <p>@if(!empty($event->link)) <a href="{{ $event->link }}" class="card-text" target="_blank">Ссылка</a> @endif</p>
                            <p class="card-text">{!!  Illuminate\Support\Str::limit($event->description, $limit = 100, $end = '...') !!}</p>
                            <p><div class="row ">
                                <div class="col-10 text-right">
                                    <a href="/events/{{ $event->id }}/edit" class="btn btn-secondary">Редактировать</a>
                                </div>

                                <div class="col-2 text-right">
                                    <a href="/events/{{ $event->id }}/delete" class="btn btn-danger">Удалить</a>
                                </div>
                            </div>
                        </div>
                    </div>

                @empty
                    <h5>События не созданы</h5>
                @endforelse
            </div>

        </div>
    @endif

@endsection