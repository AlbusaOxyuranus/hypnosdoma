@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent">
                        <li class="breadcrumb-item"><a href="/admin">Администратор</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><strong>SEO</strong></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">

        <form action="{{ action('SEOPageController@store') }}" method="post">
            @csrf

            <div class="input-group">
                <button type="submit" class="btn btn-primary my-1">Add new SEO page</button>
            </div>
        </form>

        @forelse($seo_pages as $page)
            <div class="container border shadow mb-2">
                <div>
                    <form action="{{ action('SEOPageController@update', [$page->id]) }}" method="post">
                        @csrf

                        <div class="form-group m-2">
                            <label for="url"><strong>Page URL</strong></label>
                            <input type="text" name="page_url" class="form-control" id="url" placeholder="http://Distance-learning" value="{{ $page->page_url }}">
                        </div>

                        <div class="form-group m-2">
                            <div class="row">
                                <div class="form-group col-10">
                                    <label for="page_title"><strong>Page Title (maxlength = 500)</strong></label>
                                    <textarea name="page_title" id="page_title" rows="2" class="form-control" maxlength="500">
                                        {{ $page->page_title }}
                                    </textarea>
                                </div>

                                <div class="form-group col-2">
                                    <strong>Title length</strong>
                                    <p>{{ $page->page_title_length }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="form-group m-2">
                            <div class="row">
                                <div class="form-group col-10">
                                    <label for="page_description"><strong>Page Description (maxlength = 500)</strong></label>
                                    <textarea name="page_description" id="page_description" rows="2" class="form-control" maxlength="500">
                                        {{ $page->page_description }}
                                    </textarea>
                                </div>

                                <div class="form-group col-2">
                                    <strong>Description length</strong>
                                    <p>{{ $page->page_description_length }}</p>

                                </div>
                            </div>
                        </div>

                        <div class="form-group m-2">
                            <div class="row">
                                <div class="form-group col-10">
                                    <label for="page_h1"><strong>H1 (maxlength = 500)</strong></label>
                                    <textarea name="page_h1" id="page_h1" rows="2" class="form-control" maxlength="500">
                                        {{ $page->page_h1 }}
                                    </textarea>
                                </div>

                                <div class="form-group col-2">
                                    <strong>H1 length</strong>
                                    <p>{{ $page->page_h1_length }}</p>

                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="input-group col-8">
                                <button type="submit" class="btn btn-secondary">Save</button>
                            </div>

                            <div class="input-group col-4">
                                <a href="/seo/{{ $page->id }}/delete" class="btn btn-danger">dell</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @empty
            <h3>Seo pages not exist</h3>
        @endforelse

    </div>
@endsection