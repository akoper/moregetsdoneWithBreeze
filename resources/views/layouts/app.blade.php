<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'moregetsdone.com') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="p-6 sm:px-12 font-sans antialiased">

        <header>
            <div class="flex flex-col sm:flex-row">
                <div class="text-center sm:text-left text-4xl font-bold text-gray-900 py-3 sm:w-1/2">
                    <a href="/">moregetsdone</a>
                </div>
                <div class="text-center sm:text-right text-gray-900 py-3 sm:w-1/2">
                    @auth
                        @include('layouts.navigation')
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            </div>
        </header>

{{--        <div class="min-h-screen">--}}
{{--            @include('layouts.navigation')--}}

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
{{--        </div>--}}
        <footer>
            <div class="flex justify-center text-grey-100 text-sm py-6">&copy; 2021 moregetsdone.com</div>
        </footer>
    </body>
</html>
