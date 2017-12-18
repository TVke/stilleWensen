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
<body class="bg-blue-darkest font-dosis font-normal text-grey-light text-center leading-normal">
<header>
    <a href="{{ route('info') }}" class="block text-center no-underline text-grey-light">
        <img src="{{ asset('/img/laatste_logo.svg') }}" alt="logo" role="presentation" class="w-32 block m-auto relative up-15">
        <h1 class="text-2xl leading-normal text-white">{{ __('app.title') }}</h1>
    </a>
    @guest
        <nav class="menu">
            <ul class="flex justify-around">
                <li><a href="{{ route('info') }}" class="p-4{{ Route::currentRouteName()==="info"?' active':'' }}">{{ __('app.menu-info') }}</a></li>
                <li><a href="{{ route('overview') }}" class="p-4{{ Route::currentRouteName()==="overview" || Route::currentRouteName()==="detail"?' active':'' }}">{{ __('app.menu-overview') }}</a></li>
                <li><a href="{{ route('contact') }}" class="p-4{{ Route::currentRouteName()==="contact"?' active':'' }}">{{ __('app.menu-contact') }}</a></li>
            </ul>
        </nav>
    @else
        <form action="{{ route('logout') }}" method="post">
            {{ csrf_field() }}
            <input type="submit" value="{{ __('app.logout') }}">
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
            <ul class="flex justify-around max-w-sm mx-auto">
                <li>
                    <a href="" title="Facebook" class="block relative share">
                        <div>
                            <div class="diamond-border my-4 z-10">
                                <img class="diamond w-16 h-16 p-5" src="{{ asset('/img/icons/facebook.svg') }}" alt="Facebook logo">
                            </div>
                            <div class="diamond-border share-hover absolute pin">
                                <img class="diamond w-16 h-16 p-5 bg-teal" src="{{ asset('/img/icons/facebook-invert.svg') }}" alt="Facebook logo">
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" title="Twitter" class="block relative share">
                        <div>
                            <div class="diamond-border my-4 z-10">
                                <img class="diamond w-16 h-16 p-5" src="{{ asset('/img/icons/twitter.svg') }}" alt="Twitter logo">
                            </div>
                            <div class="diamond-border share-hover absolute pin">
                                <img class="diamond w-16 h-16 p-5 bg-teal" src="{{ asset('/img/icons/twitter-invert.svg') }}" alt="Twitter logo">
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" title="Google+" class="block relative share">
                        <div>
                            <div class="diamond-border my-4 z-10">
                                <img class="diamond w-16 h-16 p-5" src="{{ asset('/img/icons/google-plus.svg') }}" alt="Google+ logo">
                            </div>
                            <div class="diamond-border share-hover absolute pin">
                                <img class="diamond w-16 h-16 p-5 bg-teal" src="{{ asset('/img/icons/google-plus-invert.svg') }}" alt="Google+ logo">
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" title="Pinterest" class="block relative share">
                        <div>
                            <div class="diamond-border my-4 z-10">
                                <img class="diamond w-16 h-16 p-5" src="{{ asset('/img/icons/pinterest.svg') }}" alt="Pinterest logo">
                            </div>
                            <div class="diamond-border share-hover absolute pin">
                                <img class="diamond w-16 h-16 p-5 bg-teal" src="{{ asset('/img/icons/pinterest-invert.svg') }}" alt="Pinterest logo">
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
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
