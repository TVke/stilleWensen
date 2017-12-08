@extends('layout')
@section('title', __('app.menu-overview').' - ')
@section('content')
	<section>
		<a href="{{ route('detail',['user_slug' => 'Lize']) }}">
			<figure>
				<img src="{{ asset('/img/vid.jpeg') }}" alt="Lize">
				<figcaption>Lize</figcaption>
			</figure>
		</a>
		<a href="{{ route('detail',['user_slug' => 'Lizer']) }}">
			<figure>
				<img src="{{ asset('/img/vid2.jpeg') }}" alt="Lizer">
				<figcaption>Lizer</figcaption>
			</figure>
		</a>
	</section>
@endsection