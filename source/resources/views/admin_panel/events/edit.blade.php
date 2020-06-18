@extends('layouts.admin')

@section('content')

    <section id="admin">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-8">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent">
                            <li class="breadcrumb-item"><a href="/admin">Администратор</a></li>
                            <li class="breadcrumb-item"><a href="/admin/events">события</a></li>
                            <li class="breadcrumb-item active" aria-current="page">редактирование события</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h3>Редактирование преимущества на ресурсе</h3>
                    </div>
                </div>

                <form action="{{ action('EventController@update', [$event->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">

                        <div class="form-group col-sm-12">
                            <label for="title">Заголовок</label>
                            <input type="text" class="form-control" id="title" name="title" maxlength="150" required value="{{ $event->title }}">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="date">Дата</label>
                            <input type="date" class="form-control" id="date" name="date" required value="{{ $event->date }}">
                        </div>


                        <div class="form-group form-check col-sm-6 mt-4 text-center">
                            <input type="checkbox" class="form-check-input" id="show" name="show" value="1" @if($event->show) checked @endif>
                            <label for="show" class="form-check-label">Показать/скрыть</label>
                        </div>

                        <div class="form-group col-sm-12">
                            <label for="link">Ссылка на внешний источник (может быть пустой)</label>
                            <input type="text" class="form-control" id="link" placeholder="https://www.onliner.by/ - пример" name="link" value="{{ $event->link }}">
                        </div>


                        <div class="form-group col-sm-12">
                            <label for="description">Описание</label>
                            <textarea name="description" id="description" class="form-control tinymce" cols="10"
                                      style="min-height: 160px">{{ $event->description }}</textarea>
                        </div>

                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary">Изменить</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </section>

@stop

