
<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Пәндер | StudyMate</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>Менің пәндерім</h1>

    <form method="POST" action="subjects.php">
        <label for="subject">Пән атауы:</label>
        <input type="text" id="subject" name="subject"
               placeholder="Мысалы, PHP бағдарламалау" required>
        <button type="submit">Пән қосу</button>
    </form>

    <p>Пәндер тізімі әзірге бос.</p>
    <a href="tasks.php">Тапсырмаларға өту</a><br><br>
    <a href="index.php">Басты бет</a>
</body>
</html>
