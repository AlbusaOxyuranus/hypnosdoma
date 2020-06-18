@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="text-center"><h5>Редактирование отзыва - {{ $rewiew->title }}</h5></div>

        <form action="{{ action('RewiewController@update', [$rewiew]) }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="input-group flex-nowrap m-1">
                <label for="title" class="col-form-label">Заголовок отзыва</label>
                <input type="text" class="form-control" name="title" value="{{ $rewiew->title }}" required aria-describedby="addon-wrapping" id="title">
            </div>

            {{--<div class="form-group m-1">
                <label for="image">Выберите изображение(100х300)</label>
                <input type="file" name="image" required id="image">
            </div>--}}


            <div class="input-group flex-nowrap m-1">
                <div class="row">
                    <div class="col-lg-6 text-center my-4">
                        <label for="old_img_en">Изображение сейчас </label>
                        <img src="/storage/uploaded_images/rewiews/{{ $rewiew->img }}" alt="img" class="img-fluid" id="old_img" style="width: 25%;">
                    </div>

                    <div class="col-lg-6">
                        <label for="image">Для замены выберите изображение(100х300)</label>
                        <input type="file" name="image" id="image">
                    </div>
                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-primary m-1">Сохранить</button>
            </div>

        </form>
    </div>
@endsection
