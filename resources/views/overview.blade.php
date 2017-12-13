@extends('layout')
@section('title', __('app.menu-overview').' - ')
@section('content')
    <section class="flex justify-center">
        <a href="{{ route('detail',['user_slug' => 'Lize']) }}" class="w-64 h-64">
            <figure class="diamond-border relative">
                <img src="{{ asset('/img/info_foto.jpg') }}" alt="Lize" class="diamond w-64 h-64">
<div class="absolute pin bg-teal opacity-50">
    <figcaption class="opacity-100">Lize</figcaption>
</div>

            </figure>
        </a>
        <a href="{{ route('detail',['user_slug' => 'Lizer']) }}" class="w-64 h-64">
            <figure class="diamond-border relative">
                <img src="{{ asset('/img/vid2.jpeg') }}" alt="Lizer" class="diamond w-64 h-64">
                <figcaption class="absolute pin">Lizer</figcaption>
            </figure>
        </a>
    </section>
@endsection