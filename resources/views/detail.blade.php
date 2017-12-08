@extends('layout')
@section('title', 'Lize'.' - ')
@section('content')
	<div class="wish">
		<h2>{!! starToElement(__('app.wishes-title'),"span") !!}</h2>
		<p>{!! starToElement(__('app.wishes-info'),"strong") !!}</p>
		<p>{!! starToElement(__('app.wishes-personal',['Sender' => 'Lize','Reciever' => 'Laura']),"strong") !!}</p>
		<video src="{{ asset('vid/nosound/Lize.mp4') }}" controls></video>
	</div>

@endsection