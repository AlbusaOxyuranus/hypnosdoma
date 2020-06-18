@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent">
                        <li class="breadcrumb-item"><a href="/admin">Администратор</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><strong>Контакты</strong></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

        <div class="container">

            <div class="justify-control-center">
                <div class="my-1">
                    <a href="{{ action('ContactController@create') }}" class="btn btn-primary my-1"><strong>Добавить новый контакт</strong></a>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row pt-4">

                    <div class="col-sm-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th style="width: 20%">Изображение</th>
                                <th style="width: 20%">Изображение для футера</th>
                                <th style="width: 20%">Название</th>
                                <th style="width: 20%">Содержание</th>
                                <th style="width: 20%">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td><img src="/img/contacts_img/{{ $contact->img }}" alt="{{ $contact->title }}" class="img-fluid w-25"></td>
                                    <td><img src="{{ asset('/storage/uploaded_images/contacts/' .  $contact->image_for_footer) }}" class="img-fluid" alt="{{ $contact->title }}"></td>
                                    <td>{{ $contact->title }}</td>
                                    <td>{{ $contact->content }}</td>
                                    <td>
                                        <div class="row">

                                            <div class="col-12">
                                                <a href="/contacts/{{ $contact->id }}/edit" class="btn btn-secondary btn-block">Редактировать</a>
                                            </div>

                                            <div class="col-12">
                                                <a href="/contacts/{{ $contact->id }}/delete" class="btn btn-danger btn-block">Удалить</a>
                                            </div>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>






        </div>

@endsection
