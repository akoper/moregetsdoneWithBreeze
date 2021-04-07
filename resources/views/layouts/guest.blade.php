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
    <body class="p-3 font-sans antialiased">
        <header>
            <div class="text-center sm:text-left text-4xl font-bold text-gray-900 py-2">
                moregetsdone
            </div>
        </header>
        <!-- Page Content -->
        <main>
            <div class="font-sans text-gray-900 antialiased">
                {{ $slot }}
            </div>
        </main>
        <footer>
            <div class="flex justify-center text-grey-100 text-sm py-6">&copy; 2021 moregetsdone.com</div>
        </footer>
    </body>
</html>
