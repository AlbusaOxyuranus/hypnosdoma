@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="text-center"><h5>Добавление нового контакта</h5></div>

        <form action="{{ action('ContactController@store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="input-group flex-nowrap m-1">
                <label for="title" class="col-form-label">Название</label>
                <input type="text" class="form-control" name="title" required maxlength="190" aria-describedby="addon-wrapping" id="title">
            </div>


            <div class="input-group flex-nowrap m-1">
                <label for="content" class="col-form-label">Содержание</label>
                <input type="text" class="form-control" name="content" maxlength="500" required aria-describedby="addon-wrapping" id="content">
            </div>

            <div class="input-group flex-nowrap m-1">
                <label for="select" class="col-form-label">Изображение</label>
                <select id="select" class="form-control" name="img" required>
                    <option disabled selected>Выберите изображение</option>
                    <option value="vk.png">VK</option>
                    <option value="viber.png">VIBER</option>
                    <option value="fb.png">FB</option>
                    <option value="tel.png">TEL</option>
                    <option value="telegram.png">TELEGRAM</option>
                    <option value="whatsapp.png">WhatsApp</option>
                    <option value="e-mail.png">E-MAIL</option>
                    <option value="earth.png">Map</option>
                </select>
            </div>

            <div class="input-group flex-nowrap m-1">
                <label for="image_file">Изображение для футера</label>
                <input type="file" id="image_file" name="image_file" required>
                <p class="help-block">Файл будет приведен к размерам 50px * 50px</p>
            </div>

            <div>
                <button type="submit" class="btn btn-primary m-1">Добавить</button>
            </div>

        </form>
    </div>
@endsection
