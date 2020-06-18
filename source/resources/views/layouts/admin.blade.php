<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/css/app.css">


    <title>Admin panel</title>
</head>
<body>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a href="{{ action('AdminController@index') }}" class="navbar-brand">
        <img src="{{ asset('/img/logo.png') }}" height="80" alt="logo">
    </a>
    <button type="button" name="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle-navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a href="{{ url('admin/advantages') }}" class="nav-link"><h4>Преимущества</h4></a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/infos') }}" class="nav-link"><h4>Инфо</h4></a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/learning_questions') }}" class="nav-link"><h4>Вопросы</h4></a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/articles') }}" class="nav-link"><h4>Новости</h4></a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/events') }}" class="nav-link"><h4>События</h4></a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/packages') }}" class="nav-link"><h4>Ценовые пакеты</h4></a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/specialists') }}" class="nav-link"><h4>Специалисты</h4></a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/rewiews') }}" class="nav-link"><h4>Отзывы</h4></a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/contacts') }}" class="nav-link"><h4>Контакты</h4></a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/seo') }}" class="nav-link"><h4>SEO</h4></a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/payment_forms') }}" class="nav-link"><h4>Формы оплаты</h4></a>
            </li>
        </ul>

        <a href="/logout" class="btn btn-dark"><h4>Выйти</h4></a>

    </div>
</nav>

<div class="container-fluid">
    @if(Session::has('flash_message'))
        <div class="alert alert-success text-center"><h5>{{ Session::get('flash_message') }}</h5></div>
    @endif
</div>

@include('layouts.errors')

@yield('content')

<script src="/js/app.js"></script>

{{--    Подключение редактора --}}

<script src="/js/tinymce/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: '.tinymce',
        theme: 'modern',
        width: '100%',
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
            "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
        ],
        toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
        toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code | caption",
        image_caption: true,
        image_advtab: true,
        external_filemanager_path: "/filemanager/",
        filemanager_title: "Responsive Filemanager",
        external_plugins: {"filemanager": "/filemanager/plugin.min.js"},
        visualblocks_default_state: true,
        relative_urls: false,
        remove_script_host: false,
        convert_urls: true,
        style_formats_autohide: true,
        style_formats_merge: true
    });
</script>

{{--    Подключение редактора--}}

</body>
</html>
