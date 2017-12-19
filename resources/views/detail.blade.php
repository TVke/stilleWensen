@extends('layout')
@section('title', 'Lize'.' - ')
@section('content')
	<div class="wish">
		<h2>{!! starToElement(__('app.wishes-title'),"span") !!}</h2>
		<p>{!! starToElement(__('app.wishes-info'),"strong") !!}</p>
		<p>{!! starToElement(__('app.wishes-personal',['Sender' => 'Lize','Reciever' => 'Laura']),"strong") !!}</p>
		<video src="{{ asset('/storage/video/no-sound/Lize.mp4') }}" controls></video>
	</div>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection