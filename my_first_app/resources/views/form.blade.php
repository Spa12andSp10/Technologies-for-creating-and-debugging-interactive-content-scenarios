@extends('layouts.app')

@section('title', 'Форма')

@push('styles')
    @vite('resources/css/form.css')
@endpush

@section('content')
    <form action="{{ url('/form') }}" method="POST" class="card">
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
@endsection