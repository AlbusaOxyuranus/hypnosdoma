@extends('layouts.admin')

@section('content')

    <section id="admin">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-8">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent">
                            <li class="breadcrumb-item"><a href="/admin">Администратор</a></li>
                            <li class="breadcrumb-item"><a href="/admin/advantages">преимущества</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Создание нового преимущества</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h3>Создание нового преимущества на ресурсе</h3>
                    </div>
                </div>

                <form action="{{ action('AdvantageController@store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">

                        <div class="form-group col-sm-12">
                            <label for="title">Заголовок</label>
                            <input type="text" class="form-control" id="title" name="title" maxlength="150" required>
                        </div>

                        <div class="form-group col-sm-8">
                            <label for="image">Изображение</label>
                            <input type="file" id="image" name="image" required>
                            <p class="help-block">Файл будет приведен к размерам 121px * 134px</p>
                        </div>

                        <div class="form-group form-check col-sm-4">
                            <input type="checkbox" class="form-check-input" id="show" name="show" value="1" checked>
                            <label for="show" class="form-check-label">Показать/скрыть</label>
                        </div>


                        <div class="form-group col-sm-12">
                            <label for="description">Описание</label>
                            <textarea name="description" id="description" class="form-control tinymce" cols="10"
                                      style="min-height: 200px"></textarea>
                        </div>

                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </section>

@stop

