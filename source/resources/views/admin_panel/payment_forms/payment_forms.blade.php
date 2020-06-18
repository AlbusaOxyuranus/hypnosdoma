@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent">
                        <li class="breadcrumb-item"><a href="/admin">Администратор</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Формы оплаты</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container mb-4">
        <div class="row">
            <div class="col-3 text-left">
                <a href="{{ action('PaymentFormController@create') }}" class="btn btn-primary m-1">Добавить форму оплаты</a>
            </div>

            @if(count($payment_forms) > 0)
                <div class="col-3 text-right">
                    <a href="/payment_forms/show_dont_show/{{ $show = 0 }}" class="btn btn-secondary m-1">Скрыть все</a>
                </div>

                <div class="col-3 text-left">
                    <a href="/payment_forms/show_dont_show/{{ $show = 1 }}" class="btn btn-secondary m-1">Показать все</a>
                </div>

                <div class="col-3 text-right">
                    <a href="{{ action('PaymentFormController@delete_all') }}" onclick="return confirm('Вы уверены, что хотите удалить ВСЕ формы оплаты?')" class="btn btn-danger m-1">Удалить все формы оплаты</a>
                </div>
            @endif
        </div>
    </div>

    @if(!empty($payment_forms))
        <div class="container">

            @forelse($payment_forms as $payment_form)

                <div class="card mb-3 border shadow" style="height: 200px">
                    <div class="row no-gutters">
                        <div class="col-md-2 text-center">
                            <img src="{{ asset('/storage/uploaded_images/payment_forms/' .  $payment_form->image_name) }}" class="img-fluid w-75" alt="...">
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                                <h5 class="card-title">{{ $payment_form->title }}</h5>
                                <p class="card-text">{!!  Illuminate\Support\Str::limit($payment_form->description, $limit = 100, $end = '...') !!}</p>
                                <p class="card-text"><strong>@if($payment_form->show == '0') СКРЫТО @else ОТОБРАЖАЕТСЯ @endif</strong></p>
                                <p><div class="row ">
                                    <div class="col-10 text-right">
                                        <a href="/payment_forms/{{ $payment_form->id }}/edit" class="btn btn-secondary">Редактировать</a>
                                    </div>

                                    <div class="col-2 text-right">
                                        <a href="/payment_forms/{{ $payment_form->id }}/delete" class="btn btn-danger">Удалить</a>
                                    </div>
                                </div></p>
                            </div>
                        </div>
                    </div>
                </div>

            @empty
                <h5>Формы оплаты пока не созданы</h5>
            @endforelse

        </div>
    @endif

@endsection
