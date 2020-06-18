@extends('layouts.template')

@section('content')

    @if(count($advantages = \App\Advantage::all()->where('show', true)) > 0)
        @include('sections.advantages')
    @endif

    @if(count($infos = \App\Info::all()) > 0)
        @include('sections.info')
    @endif

    @if(count($learning_questions = \App\LearningQuestion::all()) > 0)
        @include('sections.about')
    @endif

    @if(count($articles = \App\Article::all()->where('show', true)) > 0)
        @include('sections.news')
    @endif

    @if(count($events = \App\Event::all()->where('show', true)) > 0)
        @include('sections.events')
    @endif

    @include('sections.teachers')

    @include('sections.service_packages')

    @include('sections.contacts')
    {{-- @include('sections.reviews') --}}

    @if(count($payment_forms = \App\Payment_form::all()->where('show', true)) > 0)
        @include('sections.payment_forms')
    @endif

@endsection
