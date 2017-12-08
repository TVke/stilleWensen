@extends('layout')
@section('title', __('app.menu-contact').' - ')
@section('content')
	<h2>{{ __('app.contact-title') }}</h2>
	<section>
		<form action="{{ route('contact') }}" method="post">
			{{ csrf_field() }}
			<label for="subject">{{ __('app.contact-subject') }}</label>
			<section>
				<button id="subject" class="switch selected">{{ __('app.contact-subject-project') }}</button>
				<button class="switch">{{ __('app.contact-subject-charity') }}</button>
			</section>
			<label for="name">{{ __('app.contact-name') }}</label>
			<input id="name" name="name">
			<label for="email">{{ __('app.contact-email') }}</label>
			<input type="email" name="email" id="email">
			<label for="question">{{ __('app.contact-question') }}</label>
			<input id="question" name="question">
			<input type="submit" value="{{ __('app.contact-submit') }}" class="button">
		</form>
	</section>
@endsection