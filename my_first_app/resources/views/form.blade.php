<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Форма</title>

        @vite('resources/css/form.css')
    </head>
    <body>
        <form action="/form" method="POST">
            @csrf

            <div class="field">
                <label for="name">Имя</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}">
            </div>
            @error('name')
                <span class="text_red">Поле пустое или превышена максимальная длина 255 символов!</span>
            @enderror

            <div class="field">
                <label for="city">Город</label>
                <input type="text" id="city" name="city" value="{{ old('city') }}">
            </div>
            @error('city')
                <span class="text_red">Поле пустое или превышена максимальная длина 150 символов!</span>
            @enderror

            <div class="checkbox">
                <input type="checkbox" id="consent" name="consent" value="1" {{ old('consent') ? 'checked' : '' }}>
                <label for="consent">Согласен на обработку персональных данных</label>
            </div>
            @error('consent')
                <span class="text_red">Согласие обязательно!</span>
            @enderror

            <button type="submit">Отправить</button>
        </form>
    </body>
</html>