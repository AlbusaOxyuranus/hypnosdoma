@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent">
                        <li class="breadcrumb-item"><a href="/admin">Администратор</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ценовые пакеты</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="col-3 text-left my-3">
            <a href="{{ action('PackageController@create') }}" class="btn btn-primary m-1"><strong>Добавить новый пакет</strong></a>
        </div>

    </div>

        <div class="container">
            <div class="row">
                @forelse($packages as $package)
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $package->name }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $package->description }}</h6>
                                <p class="card-text">{!!  Illuminate\Support\Str::limit($package->content, $limit = 100, $end = '...') !!}</p>
                                <a href="/packages/{{ $package->id }}/edit" class="card-link btn-primary">Редактировать</a>
                                <a href="/packages/{{ $package->id }}/delete" class="card-link btn-danger">Удалить</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <h5>Пакеты пока не созданы</h5>
                @endforelse

            </div>
        </div>

@endsection
