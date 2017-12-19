@extends('layout')
@section('title', __('app.menu-overview').' - ')
@section('content')
    @if($wishes->count() > 0)
        <section class="flex justify-center flex-wrap max-w-xl mx-auto my-16 px-4">
            @foreach($wishes as $wish)
                <a href="{{ route('detail',['user_slug' => 'Lize']) }}" class="w-64 h-64">
                    <figure class="diamond-border relative">
                        <img src="{{ asset('/storage/img/info_foto.jpg') }}" alt="Lize" class="diamond w-64 h-64">
                    </figure>
                </a>
            @endforeach
        </section>
        {{ $wishes->links() }}
    @else
        <h2 class="py-16">{{ __('app.no-wishes') }}</h2>
    @endif
@endsection