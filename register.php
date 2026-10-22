
<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тіркелу | StudyMate</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>StudyMate</h1>
    <h2>Тіркелу</h2>

    <form action="register.php" method="POST">
        <p>
            <label for="name">Аты-жөніңіз:</label><br>
            <input type="text" id="name" name="name"
                   placeholder="Аты-жөніңізді енгізіңіз" required>
        </p>

        <p>
            <label for="email">Электрондық пошта:</label><br>
            <input type="email" id="email" name="email"
                   placeholder="example@mail.com" required>
        </p>

        <p>
            <label for="password">Құпиясөз:</label><br>
            <input type="password" id="password" name="password"
                   minlength="8" placeholder="Кемінде 8 таңба" required>
        </p>

        <button type="submit">Тіркелу</button>
    </form>

    <p>Аккаунтыңыз бар ма?
        <a href="login.php">Жүйеге кіру</a>
    </p>

    <p><a href="index.php">Басты бетке оралу</a></p>
</body>
</html>
