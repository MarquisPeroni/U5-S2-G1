<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica Attività</title>
</head>
<body>
    <h1>Modifica Attività</h1>
    <form action="/tasks/{{ $task->id }}" method="post">
        @csrf
        @method('PUT')
        <label for="title">Titolo:</label><br>
        <input type="text" id="title" name="title" value="{{ $task->title }}"><br>
        <label for="description">Descrizione:</label><br>
        <textarea id="description" name="description">{{ $task->description }}</textarea><br>
        <button type="submit">Salva Modifiche</button>
    </form>
</body>
</html>
