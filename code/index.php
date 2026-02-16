<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Результат</title>
</head>

<body>
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

    <br>
    <a href="form.html">Заполнить форму еще раз</a> | 
    <a href="view.php">Посмотреть все сохраненные данные</a>

</body>
</html>