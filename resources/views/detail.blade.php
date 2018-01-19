@extends('layout')
@section('title', $wisher->sender_name.' - ')
@section('content')
	<section class="max-w-lg mx-auto px-4">
		<h2 class="text-3xl pt-16 pb-8">{!! starToElement(__('app.wishes-title'),"span") !!}</h2>
		<p class="pb-4">{!! starToElement(__('app.wishes-info'),"strong") !!}</p>
        @if($wisher->recipient_name)
            <p class="pb-8">{!! starToElement(__('app.wishes-personal',['Sender' => $wisher->sender_name,'Reciever' => $wisher->recipient_name]),"strong") !!}</p>
        @else
            <p class="pb-8">{!! starToElement(__('app.wishes-personal',['Sender' => $wisher->sender_name,'Reciever' => "iedereen"]),"strong") !!}</p>
        @endif
        <video class="w-full" src="{{ asset('/storage/video/sound/'.$wisher->full_sound_slug.".mp4") }}" poster="{{ asset('/storage/img/videos/'.substr($wisher->soundless_video,0,-4).'.jpg') }}" controls></video>
{{--        <video class="w-full" src="{{ asset('/storage/video/no-sound/'.$wisher->soundless_video) }}" poster="{{ asset('/storage/img/videos/'.substr($wisher->soundless_video,0,-4).'.jpg') }}" controls></video>--}}
	</section>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection