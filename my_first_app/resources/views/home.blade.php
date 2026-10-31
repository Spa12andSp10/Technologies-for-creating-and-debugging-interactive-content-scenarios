@extends('layouts.app')

@section('title', 'Домашняя страница')

@section('content')
    <h1 class="name">Laravel: Начало</h1>
    <p class="subtitle">Демонстрационное приложение: форма, валидация и сохранение заявок в JSON.</p>

    <div class="actions">
        <a href="{{ url('/form') }}" class="btn">Перейти к форме</a>
        <a href="{{ url('/results') }}" class="btn btn-secondary">Перейти к заявкам</a>
    </div>
@endsection