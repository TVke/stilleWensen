<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title'){{ __('app.silent')}} {{ __('app.wishes') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<header>
	<a class="logo" href="{{ route('info') }}">
		<h1>{{ __('app.silent') }} <span></span> {{ __('app.wishes') }}</h1>
	</a>
	<nav class="menu">
		<ul>
			<li><a href="{{ route('info') }}">{{ __('app.menu-info') }}</a></li>
			<li><a href="{{ route('overview') }}">{{ __('app.menu-overview') }}</a></li>
			<li><a href="{{ route('contact') }}">{{ __('app.menu-contact') }}</a></li>
		</ul>
	</nav>
</header>
@yield('content')
<footer>
	<section class="share">
		<h3>{{ __('app.footer-title') }}</h3>
		<ul>
			<li><a href="" title="facebook"><img src="{{ asset('/img/icons/facebook.svg') }}" alt="facebook logo"></a></li>
			<li><a href="" title="twitter"><img src="{{ asset('/img/icons/twitter.svg') }}" alt="twitter logo"></a></li>
			<li><a href="" title="pintrest"><img src="{{ asset('/img/icons/pintrest.svg') }}" alt="pintrest logo"></a></li>
		</ul>
	</section>
	<nav class="menu var-footer">
		<ul>
			<li><a href="{{ route('info') }}">{{ __('app.menu-info') }}</a></li>
			<li><a href="{{ route('overview') }}">{{ __('app.menu-overview') }}</a></li>
			<li><a href="{{ route('contact') }}">{{ __('app.menu-contact') }}</a></li>
		</ul>
	</nav>
</footer>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
