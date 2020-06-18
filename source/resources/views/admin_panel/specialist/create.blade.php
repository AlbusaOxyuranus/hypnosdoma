@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="text-center"><h5>Добавление нового специалиста</h5></div>

        <form action="/specialists" method="post" enctype="multipart/form-data">
            @csrf

            <div class="text-center"><h6>(Все поля обязательны для заполнения)</h6></div>

            <div class="input-group flex-nowrap m-1">
                <label for="surname" class="col-form-label">Фамилия</label>
                <input type="text" class="form-control" name="surname" required aria-describedby="addon-wrapping" id="surname">
            </div>

            <div class="input-group flex-nowrap m-1">
                <label for="name" class="col-form-label">Имя</label>
                <input type="text" class="form-control" name="name" required aria-describedby="addon-wrapping" id="name">
            </div>

            <div class="input-group flex-nowrap m-1">
                <label for="patronymic" class="col-form-label">Отчество</label>
                <input type="text" class="form-control" name="patronymic" required aria-describedby="addon-wrapping" id="patronymic">
            </div>

            <div class="input-group flex-nowrap m-1">
                <label for="description" class="col-form-label">Описание</label>
                <textarea type="text" class="form-control tinymce" name="description" cols="30" rows="5" aria-describedby="addon-wrapping" maxlength="1000" id="description"></textarea>
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