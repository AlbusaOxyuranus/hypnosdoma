<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- <link rel="stylesheet" href="/css/app.css"> --}}
    <link rel="stylesheet" media="all" href="css/style.css">
    {{-- <link href="{{ asset('/css/style.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style-pricing-table.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style-teachers-table.css') }}" rel="stylesheet">

    @php( $seo_page = \App\SEOPage::where('page_url', url()->current())->first() )

    @if(!empty($seo_page))
        {{--    page title--}}
        @if(!empty($seo_page->page_title))
            <title>{{ $seo_page->page_title }}</title>
        @else
            <title>Школа обучения гипноза Москва. Центр гипноза. Гипнолог Москва. Заочное отделение</title>
        @endif

        {{--    page description--}}
        @if(!empty($seo_page->page_description))
            <meta name="description" content="{{ $seo_page->page_description }}">
        @else
            <meta name="description" content="Школа обучения гипноза Москва. Центр гипноза. Гипнолог Москва. Заочное отделение">
        @endif

        {{--    page H1??????????????--}}

    @endif

 </head>
