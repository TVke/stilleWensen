<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'stille wensen') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<header>
	<a href="{{ route('home') }}">
		<h1>stille <span></span> wensen</h1>
	</a>
	<nav>
		<ul>
			<li><a href="{{ route('info') }}">info</a></li>
			<li><a href="{{ route('overview') }}">overzicht</a></li>
			<li><a href="{{ route('contact') }}">contact</a></li>
		</ul>
	</nav>
</header>
@yield('content')
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
