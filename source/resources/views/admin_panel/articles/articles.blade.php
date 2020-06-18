@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent">
                        <li class="breadcrumb-item"><a href="/admin">Администратор</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Новости</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container mb-4">
        <div class="row">
            <div class="col-3 text-left">
                <a href="{{ action('ArticleController@create') }}" class="btn btn-primary m-1">Добавить новость</a>
            </div>

            @if(count($articles) > 0)
                <div class="col-3 text-right">
                    <a href="/articles/show_dont_show/{{ $show = 0 }}" class="btn btn-secondary m-1">Скрыть все</a>
                </div>

                <div class="col-3 text-left">
                    <a href="/articles/show_dont_show/{{ $show = 1 }}" class="btn btn-secondary m-1">Показать все</a>
                </div>

                <div class="col-3 text-right">
                    <a href="/articles/delete_all" class="btn btn-danger m-1">Удалить все новости</a>
                </div>
            @endif
        </div>
    </div>

    @if(!empty($articles))
        <div class="container">

            @forelse($articles as $article)

                <div class="card mb-3 border shadow" style="height: 200px">
                    <div class="row no-gutters">
                        <div class="col-md-2 text-center">
                            <img src="{{ asset('/storage/uploaded_images/articles/' .  $article->image_name) }}" class="img-fluid w-75" alt="...">
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <p class="card-text">{!!  Illuminate\Support\Str::limit($article->description, $limit = 100, $end = '...') !!}</p>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="card-text"><strong>@if($article->show == '0') СКРЫТО @else ОТОБРАЖАЕТСЯ @endif</strong></p>
                                    </div>
                                    <div class="col-6">
                                        @if(!empty($article->link)) <a href="{{ $article->link }}" class="card-text" target="_blank">Внешняя ссылка</a> @endif
                                    </div>
                                </div>
                                <p><div class="row ">
                                    <div class="col-10 text-right">
                                        <a href="/articles/{{ $article->id }}/edit" class="btn btn-secondary">Редактировать</a>
                                    </div>

                                    <div class="col-2 text-right">
                                        <a href="/articles/{{ $article->id }}/delete" class="btn btn-danger">Удалить</a>
                                    </div>
                                </div></p>
                            </div>
                        </div>
                    </div>
                </div>

            @empty
                <h5>Новости не созданы</h5>
            @endforelse

        </div>
    @endif

@endsection