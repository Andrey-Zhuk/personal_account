<?php // Обновление данных пользователя
require_once 'connect.php';

$id = $_POST['id'];
$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];

if (true){
    mysqli_query($connect, "UPDATE `users` SET `full_name` = '$full_name', `login` = '$login', `email` = '$email', `password` = '$password' WHERE `users`.`id` = '$id'");

    $response = [
    "status" => true,
    "message" => "Изменения прошли успешно"   
    ];
    echo json_encode($response);
    } else {
        $response = [
            "status" => false,  
            "message" => "Изменений нет"
        ];
        echo json_encode($response);
    }
?>