<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Все данные</title>
</head>

<body>
    <h2>Все сохранённые данные:</h2>
    <ul>
        <?php
        if(file_exists("data.txt")){
            $lines = file("data.txt", FILE_IGNORE_NEW_LINES);
            foreach($lines as $line){
                list($u, $b, $t, $m, $f) = explode(";", $line);
                echo "<li><b>$u</b> ($b) — $t, Материалы: $m, Формат: $f</li>";
            }
        } else {
            echo "<li>Данных нет</li>";
        }
        ?>
    </ul>
    <a href="index.php">На главную</a> | <a href="form.html">К форме</a>
</body>

</html>