@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="text-center"><h5>Добавление нового ценового пакета</h5></div>

        <form action="{{ action('PackageController@store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="input-group flex-nowrap m-1">
                <label for="name" class="col-form-label">Наименование</label>
                <input type="text" class="form-control" name="name" required aria-describedby="addon-wrapping" id="name">
            </div>

            <div class="input-group flex-nowrap m-1">
                <label for="description" class="col-form-label">Описание</label>
                <textarea type="text" class="form-control" name="description" cols="30" rows="5" aria-describedby="addon-wrapping" maxlength="1000" id="description"></textarea>
            </div>

            <div class="input-group flex-nowrap m-1">
                <label for="content" class="col-form-label">Содержане</label>
                <textarea type="text" class="form-control tinymce" name="content" cols="30" rows="5" aria-describedby="addon-wrapping" maxlength="1000" id="content"></textarea>
            </div>

            <div class="form-group form-check col-sm-2">
                <input type="checkbox" class="form-check-input" id="popular" name="popular" value="1" checked>
                <label for="popular" class="form-check-label">Популярный/не популярный</label>
            </div>

            <div class="form-group form-check col-sm-4">
                <input type="checkbox" class="form-check-input" id="show" name="show" value="1" checked>
                <label for="show" class="form-check-label">Показать/скрыть</label>
            </div>

            <div class="input-group flex-nowrap m-1">
                <label for="price" class="col-form-label">Цена</label>
                <input type="text" class="form-control" name="price" required aria-describedby="addon-wrapping" id="price">
            </div>

            <div class="input-group flex-nowrap m-1">
                <label for="currency" class="col-form-label">Валюта (по умолчанию RUB)</label>
                <input type="text" class="form-control" name="currency" aria-describedby="addon-wrapping" id="currency">
            </div>

            <div>
                <button type="submit" class="btn btn-primary m-1">Добавить</button>
            </div>

        </form>
    </div>
@endsection
