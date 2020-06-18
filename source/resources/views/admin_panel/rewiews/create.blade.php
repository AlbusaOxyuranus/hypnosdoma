@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="text-center"><h5>Добавление нового отзыва</h5></div>

        <form action="/rewiews" method="post" enctype="multipart/form-data">
            @csrf

            <div class="input-group flex-nowrap m-1">
                <label for="title" class="col-form-label">Заголовок отзыва</label>
                <input type="text" class="form-control" name="title" required aria-describedby="addon-wrapping" id="title">
            </div>

            <div class="form-group m-1">
                <label for="image">Выберите изображение(100х300)</label>
                <input type="file" name="image" required id="image">
            </div>

            <div>
                <button type="submit" class="btn btn-primary m-1">Добавить</button>
            </div>

        </form>
    </div>
@endsection