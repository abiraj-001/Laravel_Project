<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/20e02a2b9a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/20e02a2b9a.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand fs-3 fw-bold text-white " href="{{ url('#') }}">
               WELCOME 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link  btn btn-success rounded-pill px-4 fs-5 fw-bold text-white me-4 "  href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link btn btn-danger rounded-pill px-4 fs-5 fw-bold text-dark" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                            <a  href="#" class='fs-2  fw-bold me-5' style="text-decoration:none;">
                              <span class=' me-2 text-white'>Hii <span class="ps-3">{{ Auth::user()->name }}</span></span> 
                            </a>

                                

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                    @csrf
                                    <button type="submit" class=" btn-danger rounded-pill fs-5">Logout</button>
                                </form>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div id="app" class="">
        <section class="px-5 py-4">
            <header class="container-fluid mx-auto">
               
            </header>
        </section>

        {{-- <section class="px-5">
            <main class="container-fluid mx-auto">
                <div class="d-flex justify-content-between ">
                    @if(auth()->check())
                    <div>@include('sidebar_links')</div>
                    @endif
                    <div class="container">
                        @yield('content')
                    </div>
                    @if(auth()->check())
                    <div>@include('friends_list')</div>
                    @endif
                </div>
            </main>
        </section> --}}
        {{ $slot }}
    </div>

    <script src="http://unpkg.com/turbolinks"></script>
</body>

</html>
