@extends('layout')
@section('content')
	<form action="{{ route('store_wisher') }}" method="post">
		<h2>{{ __('app.form-title') }}</h2>
		<p>{{ __('app.form-disclaimer') }}<a href="{{ route('terms') }}">{{ __('app.form-terms') }}</a></p>
		<section>
			<section>
				<label for="">{{ __('app.name-sender') }}</label>
				<input type="text" name="" id="">
				<label for="">{{ __('app.email-sender') }}</label>
				<input type="text" name="" id="">
			</section>
			<section>
				<label for="">{{ __('app.name-receiver') }}</label>
				<input type="text" name="" id="">
				<label for="">{{ __('app.email-receiver') }}</label>
				<input type="text" name="" id="">
			</section>
		</section>
		<label for=""><input type="checkbox" name=""> {{ __('app.form-public') }}</label>
		<input type="submit" value="{{ __('app.submit-button') }}">
	</form>
@endsection