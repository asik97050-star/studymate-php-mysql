
<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Кіру | StudyMate</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>StudyMate</h1>
    <h2>Жүйеге кіру</h2>

    <form action="login.php" method="POST">
        <p>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required>
        </p>
        <p>
            <label for="password">Құпиясөз:</label><br>
            <input type="password" id="password" name="password" required>
        </p>
        <button type="submit">Кіру</button>
    </form>

    <p>Аккаунтыңыз жоқ па? <a href="register.php">Тіркелу</a></p>
    <a href="index.php">Басты бет</a>
</body>
</html>
