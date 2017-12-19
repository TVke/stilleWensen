@extends('layout')
@section('content')
	<form action="{{ route('store_wisher') }}" method="post">
		<h2 class="pt-16 text-5xl max-w-md mx-auto text-left px-8 leading-tight">{{ __('app.form-title') }}</h2>
		<p class="pb-16 text-xs max-w-md mx-auto text-left font-thin px-8">{{ __('app.form-disclaimer') }}<a class="underline hover:no-underline" href="{{ route('terms') }}">{{ __('app.form-terms') }}</a></p>
		<section class="flex flex-wrap justify-between max-w-lg mx-auto px-8">
			<section class="w-64">
				<label for="" class="text-left block mt-8">{{ __('app.name-sender') }}</label>
				<input type="text" name="" id="" class="inputfield">
				<label for="" class="text-left block mt-8">{{ __('app.email-sender') }}</label>
				<input type="text" name="" id="" class="inputfield">
			</section>
			<section class="w-64">
				<label for="" class="text-left block mt-8">{{ __('app.name-receiver') }}</label>
				<input type="text" name="" id="" class="inputfield">
				<label for="" class="text-left block mt-8">{{ __('app.email-receiver') }}</label>
				<input type="text" name="" id="" class="inputfield">
			</section>
		</section>
		<label for="" class="text-left block max-w-lg mx-auto p-8 mb-8"><input type="checkbox" class="mr-2" name=""> {{ __('app.form-public') }}</label>
		<input type="submit" class="button mb-16" value="{{ __('app.submit-button') }}">
	</form>
@endsection