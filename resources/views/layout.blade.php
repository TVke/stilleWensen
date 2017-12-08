<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title'){{ __('app.title') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#6694a2">
	<meta name="theme-color" content="#0E2640">
</head>
<body>
<header>
	<a class="logo" href="{{ url()->current() }}">
		<img src="{{ asset('/img/logo.svg') }}" alt="logo" role="presentation">
		<h1>{{ __('app.title') }}</h1>
	</a>
	@guest
		<nav class="menu">
			<ul>
				<li><a href="{{ route('info') }}"{{ Route::currentRouteName()==="info"?' class=active':'' }}>{{ __('app.menu-info') }}</a></li>
				<li><a href="{{ route('overview') }}"{{ Route::currentRouteName()==="overview" || Route::currentRouteName()==="detail"?' class=active':'' }}>{{ __('app.menu-overview') }}</a></li>
				<li><a href="{{ route('contact') }}"{{ Route::currentRouteName()==="contact"?' class=active':'' }}>{{ __('app.menu-contact') }}</a></li>
			</ul>
		</nav>
		@else
		<form action="{{ route('logout') }}" method="post">
			{{ csrf_field() }}
			<input type="submit" value="log uit">
		</form>
	@endguest
</header>
<main class="{{ Route::currentRouteName() }}">
	@yield('content')
</main>
@guest
<footer>
	<section class="share">
		<h3>{{ __('app.share-title') }}</h3>
		<p>{{ __('app.share-info') }}</p>
		<ul>
			<li><a href="" title="Facebook"><img src="{{ asset('/img/icons/facebook.svg') }}" alt="Facebook logo"></a></li>
			<li><a href="" title="Twitter"><img src="{{ asset('/img/icons/twitter.svg') }}" alt="Twitter logo"></a></li>
			<li><a href="" title="Google+"><img src="{{ asset('/img/icons/google.svg') }}" alt="Google+ logo"></a></li>
			<li><a href="" title="Pintrest"><img src="{{ asset('/img/icons/pintrest.svg') }}" alt="Pintrest logo"></a></li>
		</ul>
	</section>
	<section class="bottom">
		<div class="contact">
			<p>{{ __('app.footer-contact-info') }}</p>
			<a href="{{ route('contact') }}" class="button">{{ __('app.footer-contact-button') }}</a>
		</div>
		<nav class="menu">
			<h4>{{ __('app.footer-menu-title') }}</h4>
			<ul>
				<li><a href="{{ route('info') }}">{{ __('app.menu-info') }}</a></li>
				<li><a href="{{ route('overview') }}">{{ __('app.menu-overview') }}</a></li>
				<li><a href="{{ route('contact') }}">{{ __('app.menu-contact') }}</a></li>
			</ul>
		</nav>
		<div class="charity">
			<p>{{ __('app.footer-charity-info') }}</p>
			<a href="{{ url('http://www.doof.vlaanderen/over-doof-vlaanderen') }}" class="button">{{ __('app.footer-charity-button') }}</a>
		</div>
	</section>
	<p class="copywrite">{{ __('app.footer-copywrite',['year' => date("Y")]) }}</p>
</footer>
@endguest
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
