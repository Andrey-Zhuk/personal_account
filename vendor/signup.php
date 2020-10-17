<?php // регистрация
session_start();
require_once 'connect.php';

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
$hash = md5($login . time());

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "To: <$email>\r\n";
$headers .= "From: <andrey12345net@yandex.ru>\r\n";
// Сообщение для Email
$message = '
    <html>
    <head>
    <title>Подтвердите Email</title>
    </head>
    <body>
    <p>Что бы подтвердить Email, перейдите по <a href="http://php-auth/vendor/confirmed.php?hash=' . $hash . '">ссылка</a></p>
    </body>
    </html>
    ';

if ($password === $password_confirm) {

    mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `hash`, `email_confirmed`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$hash', 1)");
    mail($email, "Подтвердите Email на сайте", $message, $headers); // функция для отправки сообщения
    $response = [
        "status" => true, // Регистрация прошла успешно
        "message" => "Регистрация прошла успешно"
    ];
    echo json_encode($response); 

    
} else {
    $response = [
        "status" => false,  // Регистрация не произошла
        "message" => "Пароли не совпадают"
    ];
    echo json_encode($response);
}

?>
