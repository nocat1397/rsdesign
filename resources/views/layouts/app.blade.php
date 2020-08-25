<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @include('template.layouts.layout')
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .card {
            background-color: #000!important;
            Box-shadow:0 10px 20px rgba(0,0,0,0.52), 0 6px 6px rgba(0,0,0,0.52);
        }
        .card-header {
            background-color: #baff00!important;
            color: #000;
            font-weight: bold;
        }
        .card-body {
            background-color: #000;
            color: white;
        }
    </style>
</head>
<body background="{{url('img/bg.jpg')}}" >
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow p-0" style="background-color: #000">
            <div class="container-fluid pl-0">
                <a class="navbar-brand logo-area" href="{{ url('/') }}">
                    <h3 class="logo mb-0 pb-0">
                        <span class="word1">RS</span>
                        <span class="word2">designs</span>
                      </h3>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li> --}}
                            @if (Route::has('register'))
                            <div class="">
                                <li class="nav-item">
                                    <a class="nav-link btn" style="padding: 5px 10px; z-index: 100; color:#000; text-decoration:none!important; background:#baff00;" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            </div>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="mt-5">
            @yield('content')
        </main>
    </div>
    @include('template.layouts.layout')
</body>
</html>
