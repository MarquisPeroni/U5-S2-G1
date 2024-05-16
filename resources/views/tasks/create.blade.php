<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea Nuova Attività</title>
</head>
<body>
    <h1>Crea Nuova Attività</h1>
    <form action="/tasks" method="post">
        @csrf
        <label for="title">Titolo:</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="description">Descrizione:</label><br>
        <textarea id="description" name="description"></textarea><br>
        <button type="submit">Crea</button>
    </form>
</body>
</html>
