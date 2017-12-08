@extends('layout')

@section('content')
	<form method="POST" action="{{ route('login') }}">
		{{ csrf_field() }}
		<label for="name"{{ $errors->has('name') ? ' class=error' : '' }}>{{ __('auth.user_label') }}</label>
		<input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
		@if ($errors->has('email'))
			<strong>{{ $errors->first('email') }}</strong>
		@endif
		<label for="password"{{ $errors->has('password') ? ' class=error' : '' }}>{{ __('auth.password_label') }}</label>
		<input id="password" type="password" name="password" required>
		@if ($errors->has('password'))
			<strong>{{ $errors->first('password') }}</strong>
		@endif
		<label>
			<input type="checkbox" name="remember"{{ old('remember') ? ' checked' : '' }}> {{ __('auth.remember_label') }}
		</label>
		<input type="submit" value="{{ __('auth.login_button') }}">
	</form>
@endsection
