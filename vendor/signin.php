<?php // Авторизация
session_start();
require_once 'connect.php';

$email = $_POST['email'];
$password = $_POST['password'];

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password' AND `email_confirmed` = 0");
if (mysqli_num_rows($check_user) > 0) { //Ищет количесво записей по введенным email и паролю

    $user = mysqli_fetch_assoc($check_user); // Преобразует в массив

    $_SESSION['user'] = [
        "id" => $user['id'],
        "full_name" => $user['full_name'],
        "email" => $user['email']
    ];
    $response = [
        "status" => true  // произошла авторизация 
    ];
    echo json_encode($response);

} else {
    $response = [
        "status" => false,  // авторизация не произошла
        "message" => "Неверный логин, пароль или почта не подтверждена"
    ];
    echo json_encode($response);
}
?>