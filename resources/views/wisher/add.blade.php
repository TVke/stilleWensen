@extends('layout')
@section('content')
    @if(isset($errors))
    <p>{{ $errors }}</p>
    @endif
	<form action="{{ route('store_wisher') }}" method="post">
        {{ csrf_field() }}
		<h2 class="pt-4 text-5xl max-w-md mx-auto text-left px-8 leading-tight">{{ __('app.form-title') }}</h2>
        @unless(session()->exists('success'))
		<p class="pb-8 text-xs max-w-md mx-auto text-left font-thin px-8">{{ __('app.form-disclaimer') }}<a class="underline hover:no-underline" href="{{ route('terms') }}">{{ __('app.form-terms') }}</a></p>
		<section class="flex flex-wrap justify-between max-w-lg mx-auto px-8">
			<section class="w-64">
				<label for="sender_name" class="text-left block mt-8">{{ __('app.name-sender') }}</label>
				<input type="text" name="sender_name" id="sender_name" class="inputfield" required>
				<label for="sender_email" class="text-left block mt-8">{{ __('app.email-sender') }}</label>
				<input type="email" name="sender_email" id="sender_email" class="inputfield" required>
			</section>
			<section class="w-64">
				<label for="recipient_name" class="text-left block mt-8">{{ __('app.name-receiver') }}</label>
				<input type="text" name="recipient_name" id="recipient_name" class="inputfield">
				<label for="recipient_email" class="text-left block mt-8">{{ __('app.email-receiver') }}</label>
				<input type="email" name="recipient_email" id="recipient_email" class="inputfield">
			</section>
		</section>
		<label for="allow_public" class="text-left block max-w-lg mx-auto p-8"><input type="checkbox" class="mr-2" name="allow_public" id="allow_public"> {{ __('app.form-public') }}</label>
		<input type="submit" class="button mb-16" value="{{ __('app.submit-button') }}">
            @endunless
	</form>
@endsection