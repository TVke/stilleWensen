@extends('layout')
@section('title', __('app.menu-contact').' - ')
@section('content')
	<h2 class="pt-16 pb-16 text-4xl">{{ __('app.contact-title') }}</h2>
	<section class="flex justify-around">
		<form action="{{ route('contact') }}" method="post" class="w-64">
			{{ csrf_field() }}
			<label class="block text-left" for="subject">{{ __('app.contact-subject') }}</label>
            <input id="subject" name="subject" class="block inputfield">
			{{--<section class="flex border-2 text-xs mt-4">--}}
				{{--<button id="subject" class="p-2 w-full bg-grey-light text-blue-darkest font-semibold">{{ __('app.contact-subject-project') }}</button>--}}
				{{--<button class="text-grey-lighter p-2 w-full text-grey-light font-semibold">{{ __('app.contact-subject-charity') }}</button>--}}
			{{--</section>--}}
			<label for="name" class="block text-left mt-8">{{ __('app.contact-name') }}</label>
			<input id="name" name="name" class="block inputfield">
			<label for="email" class="block text-left mt-8">{{ __('app.contact-email') }}</label>
			<input type="email" name="email" id="email" class="block inputfield">
			<label for="question" class="block text-left mt-8">{{ __('app.contact-question') }}</label>
			<input id="question" name="question" class="block inputfield">
			<input type="submit" value="{{ __('app.contact-submit') }}" class="button block ml-0">
		</form>
        <section class="w-128 mt-16 mb-auto">
            <h3>{{ __('app.contact-text-question') }}</h3>
            <p class="text-lg font-light">{{ __('app.contact-text-answer') }}</p>
            <p class="pt-8 text-xs">{{ __('app.contact-link-context') }}:</p>
            <a class="underline text-xs hover:no-underline" href="{{ url('http://www.doof.vlaanderen') }}">www.doof.vlaanderen</a>
        </section>
	</section>
@endsection