<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
require_once 'vendor/connect.php';
$user_id = $_GET['id']; // получаем id пользователя
$user = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$user_id'"); // получем данные из базы данных по id пользователя
$user = mysqli_fetch_assoc($user); // получаем масссив
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Изменение данных регистрации  -->

    <form>
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        <label>ФИО</label>
        <input type="text" name="full_name" value="<?= $user['full_name'] ?>">
        <label>Логин</label>
        <input type="text" name="login" value="<?= $user['login'] ?>">
        <label>Почта</label>
        <input type="email" name="email" value="<?= $user['email'] ?>">
        <label>Пароль</label>
        <input type="password" name="password" value="<?= $user['password'] ?>">
        <button type="submit" class="update-btn">Внести изменения</button>
        <p>
            <a href="vendor/logout.php">Выйти</a>
        </p>
        <p class="msg none">Test </p>
    </form>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>