@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent">
                        <li class="breadcrumb-item"><a href="/admin">Администратор</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><strong>Специалисты</strong></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    @if(!empty($specialists))
        <div class="container">

            <div class="text-center mb-3">
                <a href="{{ action('SpecialistController@create') }}" class="btn btn-primary m-1"><strong>Добавить нового специалиста</strong></a>
            </div>

            <div class="row">

                @forelse($specialists as $specialist)
                    <div class="card mb-3" style="width: 100%">
                        <div class="row no-gutters">
                            <div class="col-md-2">
                                <img src="{{ asset('/storage/uploaded_images/specialist/' .  $specialist->img) }}" alt="img" class="img-fluid w-85">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body" style="height: 75%">
                                    <div>
                                        <h5 class="card-title">{{ $specialist->surname }} {{ $specialist->name }} {{ $specialist->patronymic }}</h5>
                                    </div>
                                    <p class="card-text">{!!  Illuminate\Support\Str::limit($specialist->description, $limit = 100, $end = '...') !!}</p>

                                </div>

                                <div class="card-footer bg-transparent border-secondary" >
                                    <div class="row ">
                                        <div class="col-10 text-right">
                                            <a href="/specialists/{{ $specialist->id }}/edit" class="btn btn-secondary">Редактировать</a>
                                        </div>

                                        <div class="col-2 text-right">
                                            <a href="/specialists/{{ $specialist->id }}/delete" class="btn btn-danger">Удалить</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @empty
                    <h5>Статьи пока не созданы</h5>
                @endforelse

            </div>
        </div>
    @endif

@endsection