@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="text-center"><h5>Редактирование контакта - "{{ $contact->title }}"</h5></div>

        <form action="/contacts/{{ $contact->id }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="input-group flex-nowrap m-1">
                <label for="title" class="col-form-label">Название</label>
                <input type="text" class="form-control" name="title" required aria-describedby="addon-wrapping" id="title"
                value="{{ $contact->title }}">
            </div>


            <div class="input-group flex-nowrap m-1">
                <label for="content" class="col-form-label">Содержание</label>
                <input type="text" class="form-control" name="content" required aria-describedby="addon-wrapping" id="content"
                       value="{{ $contact->content }}">
            </div>

            <div class="input-group flex-nowrap m-1">
                <label for="select" class="col-form-label">Изображение</label>
                <select id="select" class="form-control" name="img" required>
                    <option value="vk.png" @if($contact->img == 'vk.png') selected @endif>VK</option>
                    <option value="viber.png" @if($contact->img == 'viber.png') selected @endif>VIBER</option>
                    <option value="fb.png" @if($contact->img == 'fb.png') selected @endif>FB</option>
                    <option value="tel.png" @if($contact->img == 'tel.png') selected @endif>TEL</option>
                    <option value="telegram.png" @if($contact->img == 'telegram.png') selected @endif>TELEGRAM</option>
                    <option value="whatsapp.png" @if($contact->img == 'whatsapp.png') selected @endif>WhatsApp</option>
                    <option value="e-mail.png" @if($contact->img == 'e-mail.png') selected @endif>E-MAIL</option>
                    <option value="earth.png" @if($contact->img == 'earth.png') selected @endif>Earth</option>
                </select>
            </div>

            <div class="input-group flex-nowrap m-1">
                <label for="old_image_for_footer">Изображение для футера сейчас - </label>
                <img src="{{ asset('/storage/uploaded_images/contacts/' .  $contact->image_for_footer) }}" alt="img" id="old_image_for_footer">
            </div>

            <div class="input-group flex-nowrap m-1">
                <label for="image_file">Заменить изображение</label>
                <input type="file" id="image_file" name="image_file" required>
            </div>

            <div>
                <button type="submit" class="btn btn-primary m-1">Сохранить изменения</button>
            </div>

        </form>
    </div>
@endsection
