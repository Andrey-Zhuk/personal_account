<?php // Постраничная навигация  
require_once 'vendor/connect.php';
   
// Поверка, есть ли GET запрос
if (isset($_GET['pageno'])) {
    // Если да то переменной $pageno присваиваем его
    $pageno = $_GET['pageno'];
} else { // Иначе
    // Присваиваем $pageno один
    $pageno = 1;
}
 
// Назначаем количество данных на одной странице
$size_page = 3;
// Вычисляем с какого объекта начать выводить
$offset = ($pageno-1) * $size_page;    

// Отправляем запрос для получения количества элементов
$result = mysqli_query($connect, "SELECT COUNT(*) FROM `basket`");

// Получаем результат
$total_rows = mysqli_fetch_array($result)[0];


// Вычисляем количество страниц
$total_pages = ceil($total_rows / $size_page);


// Отправляем SQL запрос
$res_data = mysqli_query($connect, "SELECT * FROM `basket` LIMIT $size_page OFFSET $offset");
// Цикл для вывода строк
?>
 