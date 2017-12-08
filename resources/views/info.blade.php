@extends('layout')
@section('content')
	<div class="first">
		<img src="{{ asset('/img/first.jpg') }}" alt="first">
		<section>
			<h2>{{ __('app.first-title') }}</h2>
			<p>{!! starToElement(__('app.first-content'),"strong") !!}</p>
			<a href="{{ route('overview') }}" class="button">{{ __('app.first-button') }}</a>
		</section>
	</div>
	<section class="twist">
		<h2>{{ __('app.twist-title') }}</h2>
		<p>{!! starToElement(__('app.twist-content'),"strong") !!}</p>
	</section>
	<section class="wishes">
		<h2>{!! starToElement(__('app.wishes-title'),"span") !!}</h2>
		<p>{!! starToElement(__('app.wishes-info'),"strong") !!}</p>
		<img src="{{ asset('/img/wishes.jpg') }}" alt="wishes">
	</section>
@endsection
