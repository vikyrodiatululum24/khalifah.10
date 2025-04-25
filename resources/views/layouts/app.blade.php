<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- style css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- icon --}}
    <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:700|sora:300" rel="stylesheet" " rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-white">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-gradient-to-r from-cyan-200 to-blue-400 w-full py-10 shadow h-[300px] relative">
                <img src="{{ asset('img/ornamen1.png') }}" alt="ornamen" class="absolute top-10 left-10 md:left-20 lg:left-32">
                <img src="{{ asset('img/ornamen2.png') }}" alt="ornamen" class="absolute top-10 right-10 md:right-20 lg:right-32">
                <img src="{{ asset('img/ornamen3.png') }}" alt="ornamen" class="absolute bottom-10 left-1/4 md:left-1/3 lg:left-1/2 transform -translate-x-1/2">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>
