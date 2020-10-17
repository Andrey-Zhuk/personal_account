<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Профиль</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Профиль -->

    <form>
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <a href="vendor/logout.php" class="logout">Выход</a>
        <a href="basket.php" class="basket">Корзина</a>
        <a href="change_profile.php?id=<?=  $_SESSION['user']['id'] ?>" class="logout">Изменить данные профиля</a> 
        <p class="msg-profile none">Test</p>
    </form>

</body>
</html>