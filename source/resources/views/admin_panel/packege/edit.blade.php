@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent">
                        <li class="breadcrumb-item"><a href="/admin">Администратор</a></li>
                        <li class="breadcrumb-item"><a href="/admin/packages">Ценовые пакеты</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Редактирование пакета</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <form action="/packages/{{ $package->id }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="form-group col-4">
                    <label for="name" class="col-form-label">Наименование</label>
                    <input type="text" class="form-control" name="name" required aria-describedby="addon-wrapping" id="name"
                           value="{{ $package->name }}">
                </div>

                <div class="form-group col-2">
                    <label for="price" class="col-form-label">Цена</label>
                    <input type="text" class="form-control" name="price" required aria-describedby="addon-wrapping" id="price"
                           value="{{ $package->price }}">
                </div>

                <div class="form-group col-2">
                    <label for="currency" class="col-form-label">Валюта</label>
                    <input type="text" class="form-control" name="currency" required aria-describedby="addon-wrapping" id="currency"
                           value="{{ $package->currency }}">
                </div>

                <div class="form-group form-check col-sm-2">
                    <input type="checkbox" class="form-check-input" id="popular" name="popular" value="1" @if($package->popular) checked @endif>
                    <label for="popular" class="form-check-label">Популярный/не популярный</label>
                </div>

                <div class="form-group form-check col-sm-2">
                    <input type="checkbox" class="form-check-input" id="show" name="show" value="1" @if($package->show) checked @endif>
                    <label for="show" class="form-check-label">Показать/скрыть</label>
                </div>

                <div class="form-group col-12">
                    <label for="description" class="col-form-label">Описание</label>
                    <textarea type="text" class="form-control" name="description" cols="10" rows="2" aria-describedby="addon-wrapping" maxlength="1000" id="description">
                    {{ $package->description }}
                </textarea>
                </div>

                <div class="form-group col-12">
                    <label for="content" class="col-form-label">Содержане</label>
                    <textarea type="text" class="form-control tinymce" name="content" cols="30" rows="5" aria-describedby="addon-wrapping" maxlength="1000" id="content">
                    {{ $package->content }}
                </textarea>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary m-1">Сохранить изменения</button>
                </div>
            </div>

        </form>

    </div>
@endsection
