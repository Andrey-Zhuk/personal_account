<?php
session_start();
if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<!-- Форма авторизации -->

    <form>
        <label>Электронная почта</label>
        <input type="text" name="email" placeholder="Введите свою электронную почту">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit" class="login-btn">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="/register.php">зарегистрируйтесь</a>!
        </p>
        <p class="msg none">Test </p>
        
    </form>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>