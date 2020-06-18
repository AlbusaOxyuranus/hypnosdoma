@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent">
                        <li class="breadcrumb-item"><a href="/admin">Администратор</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><strong>Инфо</strong></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">

        @if(empty($infos[0]))
            <form action="{{ action('InfoController@store') }}" method="post">
                @csrf

                <div class="input-group">
                    <button type="submit" class="btn btn-primary my-1">Add Info block</button>
                </div>
            </form>
        @endif

        @forelse($infos as $info)
            <div class="container border shadow mb-2">
                <div>
                    <form action="{{ action('InfoController@update', [$info]) }}" method="post">
                        @csrf

                        <div class="form-group m-2">
                            <label for="title"><strong>Title</strong></label>
                            <input type="text" name="title" class="form-control" id="title" value="{{ $info->title }}">
                        </div>

                        <div class="form-group m-2">
                            <label for="sub_title"><strong>sub_title</strong></label>
                            <input type="text" name="sub_title" class="form-control" id="sub_title" value="{{ $info->sub_title }}">
                        </div>

                        <div class="form-group m-2">
                            <label for="description"><strong>Description</strong></label>
                            <textarea name="description" id="description" rows="2" class="form-control tinymce" maxlength="500">
                                        {{ $info->description }}
                            </textarea>
                        </div>

                        <div class="row mb-2">
                            <div class="input-group col-8">
                                <button type="submit" class="btn btn-secondary">Save</button>
                            </div>

                            <div class="input-group col-4">
                                <a href="{{ action('InfoController@delete', [$info]) }}" class="btn btn-danger">dell</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        @empty
            <h3>Info not exist</h3>
        @endforelse

    </div>
@endsection
