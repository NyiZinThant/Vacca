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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false">
                    <span class="menu-icon-bar"></span>
                    <span class="menu-icon-bar"></span>
                    <span class="menu-icon-bar"></span>
                </button>

                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li><a href="{{ url('/') }}"
                                class="nav-item nav-link nav-custom {{ Route::is('home') ? 'active' : '' }}">Infections</a>
                        </li>
                        <li><a href="{{ url('/news') }}"
                                class="nav-item nav-link nav-custom {{ Route::is('news') ? 'active' : '' }}">News</a>
                        </li>
                        <li><a href="{{ url('/vaccination') }}"
                                class="nav-item nav-link nav-custom {{ Route::is('vaccine') ? 'active' : '' }}">Vaccination</a>
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li>
                                    <a class="nav-item nav-link nav-custom"
                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li>
                                    <a class="nav-item nav-link nav-custom"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link nav-custom dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    @if (auth()->user()->name == 'admin')
                                        <a class="dropdown-item nav-custom" style="font-size: 13px !important"
                                            href="{{ route('dashboard') }}"">
                                            {{ __('Dashboard') }}
                                        </a>
                                    @endif
                                    <a class="dropdown-item nav-custom" style="font-size: 13px !important"
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; <a href="http://github.com/NyiZinThant">Nyi</a>
                    2022</p>
            </div>
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
                integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $(window).on('scroll', function() {
                if ($(this).scrollTop() >= 200) {
                    $('.navbar').addClass('fixed-top');
                } else if ($(this).scrollTop() == 0) {
                    $('.navbar').removeClass('fixed-top');
                }
            });

            function adjustNav() {
                var winWidth = $(window).width(),
                    dropdown = $('.dropdown'),
                    dropdownMenu = $('.dropdown-menu');

                if (winWidth >= 768) {
                    dropdown.on('mouseenter', function() {
                        $(this).addClass('show')
                            .children(dropdownMenu).addClass('show');
                    });

                    dropdown.on('mouseleave', function() {
                        $(this).removeClass('show')
                            .children(dropdownMenu).removeClass('show');
                    });
                } else {
                    dropdown.off('mouseenter mouseleave');
                }
            }

            $(window).on('resize', adjustNav);

            adjustNav();
        </script>
        @yield('script')
    </div>
</body>

</html>
