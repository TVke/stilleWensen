@extends('layout')
@section('title', __('app.menu-overview').' - ')
@section('content')
    @if($wishes->count() > 0)
        <section class="flex justify-center flex-wrap max-w-xl mx-auto my-16 px-4">
            @foreach($wishes as $wish)
                <a href="{{ route('detail',['user_slug' => $wish->quiet_slug]) }}" class="relative w-64 h-64">
                    <figure class="diamond-border relative">
                        <video src="{{ asset('/storage/video/no-sound/'.$wish->soundless_video) }}" class="diamond w-64 h-64" autoplay></video>
                    </figure>
                    <div class="wish-hover">
                        <svg class="w-16 h-16 m-auto block p-4" xmlns="http://www.w3.org/2000/svg" width="257" height="295.3" viewBox="0 0 257 295.3"><path fill="#fff" d="M1 .7l254.9 147.2-254.9 147.2z"/></svg>
                    </div>
                </a>
            @endforeach
        </section>
        {{ $wishes->links() }}
    @else
        <h2 class="py-16">{{ __('app.no-wishes') }}</h2>
    @endif
@endsection