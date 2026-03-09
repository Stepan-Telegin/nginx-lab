<?php session_start();
require_once 'UserInfo.php';
$info = UserInfo::getInfo();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Результат</title>
</head>

<body>
    <?php if(isset($_SESSION['errors'])): ?>
        <ul style="color:red;">
            <?php foreach($_SESSION['errors'] as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
        <?php unset($_SESSION['errors']); ?>
    <?php endif; ?>
    
    <?php if(isset($_SESSION['username'])): ?>
        <h2>Данные из сессии:</h2>
        <ul>
            <li>Имя: <?= $_SESSION['username'] ?></li>
            <li>Дата рождения: <?= $_SESSION['birthdate'] ?></li>
            <li>Тема: <?= $_SESSION['topic'] ?></li>
            <li>Материалы: <?= $_SESSION['materials'] ?></li>
            <li>Формат: <?= $_SESSION['format'] ?></li>
        </ul>
    <?php else: ?>
        <p>Данных пока нет.</p>
    <?php endif; ?>

    <?php
    if (isset($_SESSION['api_data'])) {
        echo "<h3>Данные из API:</h3>";
        echo "<pre>" . print_r($_SESSION['api_data'], true) . "</pre>";
    }
    ?>

    <br>
    <a href="form.html">Заполнить форму еще раз</a> | 
    <a href="view.php">Посмотреть все сохраненные данные</a>

    <?php
    echo "<h3>Информация о пользователе:</h3>";
    foreach ($info as $key => $val) {
        echo htmlspecialchars($key) . ': ' . htmlspecialchars($val) . '<br>';
    }
    ?>
    
</body>

</html>
