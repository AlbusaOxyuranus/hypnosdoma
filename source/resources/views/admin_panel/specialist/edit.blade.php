@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="text-center"><h5>Редактирование специалиста {{ $specialist->surname }} {{ $specialist->name }} {{ $specialist->patronymic }}</h5></div>

        <form action="/specialists/{{ $specialist->id }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="text-center"><h6>(Все поля обязательны для заполнения)</h6></div>

            <div class="input-group flex-nowrap m-1">
                <label for="surname" class="col-form-label">Фамилия</label>
                <input type="text" class="form-control" name="surname" required aria-describedby="addon-wrapping" id="surname"
                        value="{{ $specialist->surname }}">
            </div>

            <div class="input-group flex-nowrap m-1">
                <label for="name" class="col-form-label">Имя</label>
                <input type="text" class="form-control" name="name" required aria-describedby="addon-wrapping" id="name"
                       value="{{ $specialist->name }}">
            </div>

            <div class="input-group flex-nowrap m-1">
                <label for="patronymic" class="col-form-label">Отчество</label>
                <input type="text" class="form-control" name="patronymic" required aria-describedby="addon-wrapping" id="patronymic"
                       value="{{ $specialist->patronymic }}">
            </div>

            <div class="input-group flex-nowrap m-1">
                <label for="description" class="col-form-label">Описание</label>
                <textarea type="text" class="form-control tinymce" name="description" cols="30" rows="5" aria-describedby="addon-wrapping" maxlength="1000" id="description">
                    {{ $specialist->description }}
                </textarea>
            </div>

            <div class="form-group m-1">
                <div class="row">
                    <div class="col-6">
                        <label for="image" class="col-form-label">Фото (160х300)</label>
                        <input type="file" class="form-control-file" name="image" id="image">
                    </div>
                    <div class="col-6">
                        <div class="col-12">
                            <label for="img">Фото сейчас</label>
                        </div>
                        <div class="col-12">
                            <img src="{{ asset('/storage/uploaded_images/specialist/' . $specialist->img) }}" alt="img" class="img-fluid" style="width: 25%;">
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-primary m-1">Сохранить изменения</button>
            </div>

        </form>
    </div>
@endsection