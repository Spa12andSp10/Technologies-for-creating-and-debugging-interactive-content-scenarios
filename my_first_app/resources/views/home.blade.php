<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Домашняя страница</title>

        @vite('resources/css/home.css')
    </head>
    <body>
        <p class="name">Laravel: Начало</p>
        <a href="form">
            <button type="button">Перейти к форме</button>
        </a>
    </body>
</html>