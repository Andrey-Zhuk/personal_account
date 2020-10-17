<?php // Выход пользователя
session_start();
unset($_SESSION['user']);
header('Location: ../index.php');
?>