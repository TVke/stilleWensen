@extends('layout')
@section('title', __('app.menu-contact').' - ')
@section('content')
	<h2 class="pt-16 pb-16">{{ __('app.contact-title') }}</h2>
	<section class="flex justify-around">
		<form action="{{ route('contact') }}" method="post" class="w-64">
			{{ csrf_field() }}
			<label class="block text-left" for="subject">{{ __('app.contact-subject') }}</label>
			<section class="flex">
				<button id="subject" class="switch selected">{{ __('app.contact-subject-project') }}</button>
				<button class="switch">{{ __('app.contact-subject-charity') }}</button>
			</section>
			<label for="name" class="block text-left">{{ __('app.contact-name') }}</label>
			<input id="name" name="name" class="block text-input">
			<label for="email" class="block text-left">{{ __('app.contact-email') }}</label>
			<input type="email" name="email" id="email" class="block text-input">
			<label for="question" class="block text-left">{{ __('app.contact-question') }}</label>
			<input id="question" name="question" class="block text-input">
			<input type="submit" value="{{ __('app.contact-submit') }}" class="button block ml-0">
		</form>
        <section class="w-128">
            <h3>{{ __('app.contact-text-question') }}</h3>
            <p class="text-lg font-light">{{ __('app.contact-text-answer') }}</p>
            <p class="pt-8 text-xs">{{ __('app.contact-link-context') }}:</p>
            <a class="underline text-xs hover:no-underline" href="{{ url('http://www.doof.vlaanderen') }}">www.doof.vlaanderen</a>
        </section>
	</section>
@endsection