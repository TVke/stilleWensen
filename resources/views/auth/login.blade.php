@extends('layout')

@section('content')
	<form method="POST" action="{{ route('login') }}" class="my-16 w-128 mx-auto text-left">
		{{ csrf_field() }}
		<label for="name" class="block mt-8{{ $errors->has('name') ? ' text-red' : '' }}">{{ __('auth.user_label') }}</label>
		<input class="inputfield{{ $errors->has('name')?" error":"" }}" id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
		@if ($errors->has('email'))
			<p class="text-left text-red -mt-2 font-thin text-xs">{{ $errors->first('email') }}</p>
		@endif
		<label for="password" class="block mt-8{{ $errors->has('password') ? ' text-red' : '' }}">{{ __('auth.password_label') }}</label>
		<input class="inputfield{{ $errors->has('password')?" error":"" }}" id="password" type="password" name="password" required>
		@if ($errors->has('password'))
			<p class="text-left text-red -mt-2 font-thin text-xs">{{ $errors->first('password') }}</p>
		@endif
		<label class="block mt-8">
			<input type="checkbox" class="mr-2" name="remember"{{ old('remember') ? ' checked' : '' }}> {{ __('auth.remember_label') }}
		</label>
		<input type="submit" class="button block" value="{{ __('auth.login_button') }}">
	</form>
@endsection
