@extends('layout')
@section('content')
	<form action="{{ route('store_wisher') }}" method="post">
        {{ csrf_field() }}
		<h2 class="pt-16 text-5xl max-w-md mx-auto text-left px-8 leading-tight">{{ __('app.form-title') }}</h2>
		<p class="pb-8 text-xs max-w-md mx-auto text-left font-thin px-8">{{ __('app.form-disclaimer') }}<a class="underline hover:no-underline" href="{{ route('terms') }}">{{ __('app.form-terms') }}</a></p>
        @if(session()->has('success'))
            <p class="text-green">{{ __('app.wisher-success') }}</p>
        @endif
        <section class="flex flex-wrap justify-between max-w-lg mx-auto px-8">
			<section class="w-64">
				<label for="sender_name" class="text-left block mt-8{{ $errors->has('sender_name')?" text-red":"" }}">{{ __('app.name-sender') }}</label>
				<input name="sender_name" id="sender_name" class="inputfield{{ $errors->has('sender_name')?" error":"" }}" value="{{ old('sender_name') }}" required>
                @if ($errors->has('sender_name'))
                    <p class="text-left text-red -mt-2 font-thin text-xs">{{ $errors->first('sender_name') }}</p>
                @endif
				<label for="sender_email" class="text-left block mt-8{{ $errors->has('sender_email')?" text-red":"" }}">{{ __('app.email-sender') }}</label>
				<input type="email" name="sender_email" id="sender_email" class="inputfield{{ $errors->has('sender_email')?" error":"" }}" value="{{ old('sender_email') }}" required>
                @if ($errors->has('sender_email'))
                    <p class="text-left text-red -mt-2 font-thin text-xs">{{ $errors->first('sender_email') }}</p>
                @endif
			</section>
			<section class="w-64">
				<label for="recipient_name" class="text-left block mt-8{{ $errors->has('recipient_name')?" text-red":"" }}">{{ __('app.name-receiver') }}</label>
				<input name="recipient_name" id="recipient_name" class="inputfield{{ $errors->has('recipient_name')?" error":"" }}" value="{{ old('recipient_name') }}">
                @if ($errors->has('recipient_name'))
                    <p class="text-left text-red -mt-2 font-thin text-xs">{{ $errors->first('recipient_name') }}</p>
                @endif
				<label for="recipient_email" class="text-left block mt-8{{ $errors->has('recipient_email')?" text-red":"" }}">{{ __('app.email-receiver') }}</label>
				<input type="email" name="recipient_email" id="recipient_email" class="inputfield{{ $errors->has('recipient_email')?" error":"" }}" value="{{ old('recipient_email') }}">
                @if ($errors->has('recipient_email'))
                    <p class="text-left text-red -mt-2 font-thin text-xs">{{ $errors->first('recipient_email') }}</p>
                @endif
			</section>
		</section>
		<label for="allow_public" class="text-left block max-w-lg mx-auto p-8"><input type="checkbox" class="mr-2" name="allow_public" id="allow_public" {{ old('allow_public')?"checked":"" }}> {{ __('app.form-public') }}</label>
		<input type="submit" class="button mb-16" value="{{ __('app.submit-button') }}">

	</form>
@endsection