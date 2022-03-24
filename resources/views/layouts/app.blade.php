<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'roocket') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
    <div id="app">
        <header class="text-gray-600 body-font">
            <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
                    @guest
                                        @if (Route::has('login'))
                                                <a class="mr-5 hover:text-gray-900" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        @endif
                                        
                                        @if (Route::has('register'))
                                                <a class="mr-5 hover:text-gray-900" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        @endif
                                    @else
                                            <a id="navbarDropdown" class="mr-5 hover:text-gray-900" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>
                                            <a class="mr-5 hover:text-gray-900" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        
                                    @endguest
                </nav>
                <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
                    <i class='bx bx-meteor bx-md text-rose-600'></i>
                    <span class="ml-3 text-xl">{{ config('app.name', 'Roocket') }}</span>
                </a>
                <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">

                </div>
            </div>
        </header>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
