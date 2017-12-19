@extends('layout')
@section('content')
	<div class="flex flex-wrap justify-center py-8 mx-auto">
        <div class="diamond-border max-w-xs my-auto mx-4 sm:mx-0">
            <img class="diamond w-100" src="{{ asset('/storage/img/info_foto.jpg') }}" alt="first">
        </div>
		<section class="max-w-sm p-6">
			<h2 class="py-4">{{ __('app.first-title') }}</h2>
			<p class="py-4">{!! starToElement(__('app.first-content'),"strong") !!}</p>
			<a href="{{ route('overview') }}" class="button my-4">{{ __('app.first-button') }}</a>
		</section>
	</div>
	<section class="p-4 mx-auto max-w-sm">
		<h2 class="pb-2">{{ __('app.twist-title') }}</h2>
		<p class="pb-16">{!! starToElement(__('app.twist-content'),"strong") !!}</p>
	</section>
	<section class="p-4 mx-auto max-w-2xl">
		<h2 class="pb-8">{!! starToElement(__('app.wishes-title'),"span") !!}</h2>
		<p class="pb-8">{!! starToElement(__('app.wishes-info'),"strong") !!}</p>
{{--		<img src="{{ asset('/img/info_foto.jpg') }}" alt="wishes">--}}
        {{--<video class="w-full" src="{{ asset('/vid/test.mp4') }}"></video>--}}
	</section>
@endsection
