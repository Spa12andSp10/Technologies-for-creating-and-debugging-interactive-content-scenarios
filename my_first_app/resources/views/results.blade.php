@extends('layouts.app')

@section('title', 'Результаты')

@push('styles')
    @vite('resources/css/results.css')
@endpush

@section('content')
    <h1>Все отправленные формы</h1>
    <a href="{{ url('/form') }}" class="btn btn-secondary">Вернуться к форме</a>

    @if(count($forms) > 0)
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Имя</th>
                    <th>Город</th>
                    <th>Согласие</th>
                    <th>Дата</th>
                </tr>
            </thead>
            <tbody>
                @foreach($forms as $index => $form)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $form['name'] ?? '—' }}</td>
                        <td>{{ $form['city'] ?? '—' }}</td>
                        <td>{{ !empty($form['consent']) ? 'Да' : 'Нет' }}</td>
                        <td>{{ $form['created_at'] ?? '—' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Пока нет ни одной сохраненной заявки.</p>
    @endif
@endsection