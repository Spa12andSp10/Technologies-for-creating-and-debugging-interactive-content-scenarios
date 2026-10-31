<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Laravel: Начало')</title>

    @vite('resources/css/app.css')
    @stack('styles')
</head>
<body>
    @include('partials.header')

    <main class="content">
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>