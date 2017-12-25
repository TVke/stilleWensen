@extends('layout')
@section('content')
	<section class="py-16 px-4 max-w-md mx-auto text-left">
        <h2 class="text-4xl border-b mx-auto w-64 mb-4 text-center">{{ __('app.form-terms') }}</h2>
        <p>{{ __('app.condition-1') }}</p>
        <p class="pt-4">{{ __('app.condition-2') }}</p>
        <p>{{ __('app.condition-3') }}</p>
        <p>{{ __('app.condition-4') }}</p>
    </section>
@endsection