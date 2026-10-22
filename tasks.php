
<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Тапсырмалар | StudyMate</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>Менің тапсырмаларым</h1>

    <form method="GET" action="tasks.php">
        <input type="search" name="search" placeholder="Тапсырманы іздеу">
        <select name="status">
            <option value="">Барлық тапсырма</option>
            <option value="pending">Орындалмаған</option>
            <option value="completed">Орындалған</option>
        </select>
        <button type="submit">Іздеу</button>
    </form>

    <h2>Тапсырмалар тізімі</h2>
    <p>Әзірге тапсырмалар жоқ.</p>

    <a href="index.php">Басты бет</a>
</body>
</html>
