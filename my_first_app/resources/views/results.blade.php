<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Результаты</title>

    @vite('resources/css/results.css')
</head>
<body>

    <h1>Все отправленные формы</h1>
    <a href="/form">Вернуться к форме</a>

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

</body>
</html>