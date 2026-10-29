<?php
session_start();
?>
<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Кіру | StudyMate</title>

    <!-- Bootstrap CSS кітапханасы -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Өзіміздің CSS файл -->
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #eff6ff, #dbeafe);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        .login-card {
            width: 100%;
            max-width: 430px;
            background: #ffffff;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 12px 35px rgba(37, 99, 235, 0.12);
        }

        .logo {
            color: #2563eb;
            font-size: 32px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #64748b;
            text-align: center;
            margin-bottom: 28px;
        }

        .form-control {
            padding: 12px;
            border-radius: 10px;
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            background: #2563eb;
            color: white;
            font-weight: bold;
            border: none;
        }

        .btn-login:hover {
            background: #1d4ed8;
            color: white;
        }

        .bottom-links {
            text-align: center;
            margin-top: 22px;
            font-size: 14px;
        }

        .bottom-links a {
            color: #2563eb;
            text-decoration: none;
            font-weight: bold;
        }

        .bottom-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <main class="login-card">

        <div class="logo">StudyMate</div>

        <p class="subtitle">
            Оқу тапсырмаларыңды бір жерде басқар!
        </p>

        <h2 class="h4 text-center mb-4">
            Жүйеге кіру
        </h2>

        <form action="login.php" method="POST">

            <div class="mb-3">
                <label for="email" class="form-label">
                    Электрондық пошта
                </label>

                <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="name@example.com"
                    autocomplete="email"
                    required
                >
            </div>

            <div class="mb-4">
                <label for="password" class="form-label">
                    Құпиясөз
                </label>

                <input
                    type="password"
                    class="form-control"
                    id="password"
                    name="password"
                    placeholder="Құпиясөзіңізді енгізіңіз"
                    autocomplete="current-password"
                    required
                >
            </div>

            <button type="submit" class="btn btn-login">
                Кіру
            </button>

        </form>

        <div class="bottom-links">
            <p>
                Аккаунтыңыз жоқ па?
                <a href="register.php">Тіркелу</a>
            </p>

            <a href="index.php">← Басты бетке оралу</a>
        </div>

    </main>

</body>
</html>
