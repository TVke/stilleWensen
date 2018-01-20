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
    <!-- twitter and facebook -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@StilleWensen">
    <meta property="fb:app_id" content="376898966054630">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title'){{ __('app.title') }}">
    @if(Route::currentRouteName() === "overview" || Route::currentRouteName() === "detail" || Route::currentRouteName()==="detail_sound")
        <meta name="description" content="{{ __('app.overview_description') }}">
    <meta property="og:description" content="{{ __('app.overview_description') }}">
    @elseif(Route::currentRouteName() === "contact")
        <meta name="description" content="{{ __('app.contact_description') }}">
    <meta property="og:description" content="{{ __('app.contact_description') }}">
    @else
        <meta name="description" content="{{ __('app.general_description') }}">
        <meta property="og:description" content="{{ __('app.general_description') }}">
    @endif
    @if(Route::currentRouteName()==="info")
        <meta property="og:image" content="https://i1.ytimg.com/vi/GtkcPOoI3CY/hqdefault.jpg">
        <meta property="og:image:alt" content="Voorstelling project: Stille Wensen">
    @elseif(Route::currentRouteName()==="detail" || Route::currentRouteName()==="detail_sound")
        <meta property="og:image" content="{{ asset('/storage/img/videos/'.substr($wisher->soundless_video,0,-4).'.jpg') }}">
        <meta property="og:image:alt" content="{{ $wisher->sender_name }}">
        <meta property="og:image:width" content="1880">
        <meta property="og:image:height" content="1058">
    @else
        <meta property="og:image" content="{{ asset('/storage/img/social_logo.png') }}">
        <meta property="og:image:alt" content="Stille Wensen Logo">
    @endif
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <link rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
@endforeach
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111539331-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-111539331-1');
    </script>
</head>
<body class="bg-blue-darkest font-dosis font-normal text-grey-light text-center leading-normal">
<header>
    <div class="relative max-w-lg mx-auto">
        <div class="absolute pin-r pin-t py-2 sm:py-4 px-4 sm:px-6 flex">
            <a href="{{ LaravelLocalization::getLocalizedURL('nl') }}"{{ (LaravelLocalization::getCurrentLocale()==="nl")?" class=text-teal":"" }}>NL</a>
            <p class="px-1">/</p>
            <a href="{{ LaravelLocalization::getLocalizedURL('en') }}"{{ (LaravelLocalization::getCurrentLocale()==="en")?" class=text-teal":"" }}>ENG</a>
        </div>
    </div>
    @guest
        <a href="{{ route('info') }}" class="block text-center no-underline text-grey-light w-64 mx-auto">
            <img src="{{ asset('/storage/img/laatste_logo.svg') }}" alt="logo" role="presentation" class="w-32 block m-auto relative up-15">
            <h1 class="text-2xl leading-normal text-white">{{ __('app.title') }}</h1>
        </a>
        <nav class="menu">
            <ul class="flex justify-around">
                <li><a href="{{ route('info') }}" class="p-4{{ Route::currentRouteName()==="info"?' active':'' }}">{{ __('app.menu-info') }}</a></li>
                <li><a href="{{ route('overview') }}" class="p-4{{ Route::currentRouteName()==="overview" || Route::currentRouteName()==="detail"?' active':'' }}">{{ __('app.menu-overview') }}</a></li>
                <li><a href="{{ route('contact') }}" class="p-4{{ Route::currentRouteName()==="contact"?' active':'' }}">{{ __('app.menu-contact') }}</a></li>
            </ul>
        </nav>
    @else
        <img src="{{ asset('/storage/img/laatste_logo.svg') }}" alt="logo" role="presentation" class="w-32 block m-auto relative up-15">
        <h1 class="text-2xl leading-normal text-white">{{ __('app.title') }}</h1>
        <form action="{{ route('logout') }}" method="post">
            {{ csrf_field() }}
            <input type="submit" class="w-full py-4 text-blue-darkest bg-blue-darkest cursor-pointer" value="{{ __('app.logout') }}">
        </form>
    @endguest
</header>
<main>
    @yield('content')
</main>
@guest
    <footer>
        <section class="px-1 py-8 my-8 border-t border-b border-teal block">
            <h3 class="py-4 font-normal text-3xl">{{ __('app.share-title') }}</h3>
            <p class="pt-1 pb-3">{{ __('app.share-info') }}</p>
            @unless(Route::currentRouteName()==="detail" || Route::currentRouteName()==="detail_sound")
                <ul class="flex justify-around max-w-sm mx-auto">
                    <li>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode("https://www.youtube.com/watch?v=GtkcPOoI3CY") }}&amp ;src=sdkpreparse" title="Facebook" class="block relative share">
                            <div>
                                <div class="diamond-border my-4 z-10">
                                    <img class="diamond w-16 h-16 p-5" src="{{ asset('/storage/img/icons/facebook.svg') }}" alt="Facebook logo">
                                </div>
                                <div class="diamond-border share-hover absolute pin">
                                    <img class="diamond w-16 h-16 p-5 bg-teal" src="{{ asset('/storage/img/icons/facebook-invert.svg') }}" alt="Facebook logo">
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/share?url={{ urlencode("https://www.youtube.com/watch?v=GtkcPOoI3CY") }}" title="Twitter" class="block relative share">
                            <div>
                                <div class="diamond-border my-4 z-10">
                                    <img class="diamond w-16 h-16 p-5" src="{{ asset('/storage/img/icons/twitter.svg') }}" alt="Twitter logo">
                                </div>
                                <div class="diamond-border share-hover absolute pin">
                                    <img class="diamond w-16 h-16 p-5 bg-teal" src="{{ asset('/storage/img/icons/twitter-invert.svg') }}" alt="Twitter logo">
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/share?url={{ urlencode("https://www.youtube.com/watch?v=GtkcPOoI3CY") }}" title="Google+" class="block relative share">
                            <div>
                                <div class="diamond-border my-4 z-10">
                                    <img class="diamond w-16 h-16 p-5" src="{{ asset('/storage/img/icons/google-plus.svg') }}" alt="Google+ logo">
                                </div>
                                <div class="diamond-border share-hover absolute pin">
                                    <img class="diamond w-16 h-16 p-5 bg-teal" src="{{ asset('/storage/img/icons/google-plus-invert.svg') }}" alt="Google+ logo">
                                </div>
                            </div>
                        </a>
                    </li>
                    {{--<li>--}}
                        {{--<a href="https://www.pinterest.com/pin/create/button/?url=https%3A//www.youtube.com/attribution_link%3Fa%3Dhd3dHS0DKbg%26u%3D%252Fwatch%253Fv%253DGtkcPOoI3CY%2526feature%253Dshare&description=Voorstelling%20project%3A%20Stille%20Wensen&is_video=true&media=https%3A//i.ytimg.com/vi/GtkcPOoI3CY/maxresdefault.jpg" title="Pinterest" class="block relative share">--}}
                            {{--<div>--}}
                                {{--<div class="diamond-border my-4 z-10">--}}
                                    {{--<img class="diamond w-16 h-16 p-5" src="{{ asset('/storage/img/icons/pinterest.svg') }}" alt="Pinterest logo">--}}
                                {{--</div>--}}
                                {{--<div class="diamond-border share-hover absolute pin">--}}
                                    {{--<img class="diamond w-16 h-16 p-5 bg-teal" src="{{ asset('/storage/img/icons/pinterest-invert.svg') }}" alt="Pinterest logo">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                </ul>
            @else
                <ul class="flex justify-around max-w-sm mx-auto">
                    <li>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}&amp ;src=sdkpreparse" title="Facebook" class="block relative share">
                            <div>
                                <div class="diamond-border my-4 z-10">
                                    <img class="diamond w-16 h-16 p-5" src="{{ asset('/storage/img/icons/facebook.svg') }}" alt="Facebook logo">
                                </div>
                                <div class="diamond-border share-hover absolute pin">
                                    <img class="diamond w-16 h-16 p-5 bg-teal" src="{{ asset('/storage/img/icons/facebook-invert.svg') }}" alt="Facebook logo">
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/share?url={{ urlencode(url()->current()) }}" title="Twitter" class="block relative share">
                            <div>
                                <div class="diamond-border my-4 z-10">
                                    <img class="diamond w-16 h-16 p-5" src="{{ asset('/storage/img/icons/twitter.svg') }}" alt="Twitter logo">
                                </div>
                                <div class="diamond-border share-hover absolute pin">
                                    <img class="diamond w-16 h-16 p-5 bg-teal" src="{{ asset('/storage/img/icons/twitter-invert.svg') }}" alt="Twitter logo">
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/share?url={{ urlencode(url()->current()) }}" title="Google+" class="block relative share">
                            <div>
                                <div class="diamond-border my-4 z-10">
                                    <img class="diamond w-16 h-16 p-5" src="{{ asset('/storage/img/icons/google-plus.svg') }}" alt="Google+ logo">
                                </div>
                                <div class="diamond-border share-hover absolute pin">
                                    <img class="diamond w-16 h-16 p-5 bg-teal" src="{{ asset('/storage/img/icons/google-plus-invert.svg') }}" alt="Google+ logo">
                                </div>
                            </div>
                        </a>
                    </li>
                    {{--<li>--}}
                        {{--<a href="" title="Pinterest" class="block relative share">--}}
                            {{--<div>--}}
                                {{--<div class="diamond-border my-4 z-10">--}}
                                    {{--<img class="diamond w-16 h-16 p-5" src="{{ asset('/storage/img/icons/pinterest.svg') }}" alt="Pinterest logo">--}}
                                {{--</div>--}}
                                {{--<div class="diamond-border share-hover absolute pin">--}}
                                    {{--<img class="diamond w-16 h-16 p-5 bg-teal" src="{{ asset('/storage/img/icons/pinterest-invert.svg') }}" alt="Pinterest logo">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                </ul>
            @endunless
        </section>
        <section class="block flex flex-wrap justify-around mt-16 mb-8 max-w-lg mx-auto">
            <div class="w-64 mb-8">
                <p class="text-lg font-thin">{{ __('app.footer-contact-info') }}</p>
                <a href="{{ route('contact') }}" class="button">{{ __('app.footer-contact-button') }}</a>
            </div>
            <nav class="menu w-32 pb-16">
                <h4 class="font-semibold pb-4">{{ __('app.footer-menu-title') }}</h4>
                <ul>
                    <li><a href="{{ route('info') }}" class="underline hover:no-underline">{{ __('app.menu-info') }}</a></li>
                    <li><a href="{{ route('overview') }}" class="underline hover:no-underline">{{ __('app.menu-overview') }}</a></li>
                    <li><a href="{{ route('contact') }}" class="underline hover:no-underline">{{ __('app.menu-contact') }}</a></li>
                </ul>
            </nav>
            <div class="w-64">
                <p class="text-lg font-thin">{{ __('app.footer-charity-info') }}</p>
                <a href="{{ url('http://www.doof.vlaanderen/over-doof-vlaanderen') }}" class="button">{{ __('app.footer-charity-button') }}</a>
            </div>
        </section>
        <p class="p-2">{{ __('app.footer-copywrite',['year' => date("Y")]) }}</p>
    </footer>
@endguest
</body>
</html>
