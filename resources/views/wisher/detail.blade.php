@extends('layout')
@section('title', $wisher->sender_name.' - ')
@section('content')
	<section>
		<h2>{!! starToElement(__('app.wishes-title'),"span") !!}</h2>
		<p>{!! starToElement(__('app.wishes-info'),"strong") !!}</p>
        @if($wisher->recipient_name)
            <p>{!! starToElement(__('app.wishes-personal',['Sender' => $wisher->sender_name,'Reciever' => $wisher->recipient_name]),"strong") !!}</p>
        @else
            <p>{!! starToElement(__('app.wishes-personal',['Sender' => $wisher->sender_name,'Reciever' => "iedereen"]),"strong") !!}</p>
        @endif
	</section>
    <video src="{{ asset('/storage/video/sound/'.$wisher->full_sound_slug.".mp4") }}" controls></video>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection