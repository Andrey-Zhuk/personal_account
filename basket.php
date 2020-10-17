<?php // Корзина прокупок
require_once 'vendor/connect.php';
require_once 'vendor/pagination.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Таблица товаров</title>
</head>
<body> 
    <div class="table_basket">
        <h2>Страница с историей заказов</h2>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Prise</th>
                    <th>Description</th>
                    <th>Balance</th>
                </tr>
                <?php
                $rows = mysqli_fetch_all($res_data); // преобразует в массив
                foreach ($rows as $row) { // Цыкл 
                    ?>  
                        <tr>
                            <td><?= $row[0] ?></td>
                            <td><?= $row[1] ?></td>
                            <td><?= $row[2] ?></td>
                            <td><?= $row[3] ?></td>
                            <td><?= $row[4] ?></td>
                        </tr>
                        <?php
                    }
                ?>
                <tr>
                    <td>
                        <a href="/" class="dasket_return">Выйти</a>
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                        <ul>
                            <li><a href="?pageno=1">Начало</a></li>
                            <li class="<?php if ($pageno <= 1){ echo 'disabled'; } ?>">
                            <a href="<?php if ($pageno <= 1){ echo '#'; } 
                            else { echo "?pageno=" . ($pageno - 1); } ?>">Предыдущее</a>
                            </li>
                            <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                                <a href="<?php if ($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Следующее</a>
                            </li>
                            <li><a href="?pageno=<?php echo $total_pages; ?>">Конец</a></li>
                        </ul>
                    </td>
                    <td></td>
                </tr>

            </table>
            
        </div>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>

