<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco Attività</title>
</head>
<body>
    <h1>Elenco Attività</h1>
    <ul>
        @foreach($tasks as $task)
            <li>{{ $task->title }}</li>
        @endforeach
    </ul>
    <a href="/tasks/create">Crea Nuova Attività</a>
</body>
</html>
