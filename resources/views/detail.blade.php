@extends('layout')
@section('title', $wisher->sender_name.' - ')
@section('content')
	<section>
		<h2>{!! starToElement(__('app.wishes-title'),"span") !!}</h2>
		<p>{!! starToElement(__('app.wishes-info'),"strong") !!}</p>
		<p>{!! starToElement(__('app.wishes-personal',['Sender' => $wisher->sender_name,'Reciever' => $wisher->recipient_name]),"strong") !!}</p>
	</section>
    <video src="{{ asset('/storage/video/no-sound/'.$wisher->soundless_video) }}" controls></video>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection