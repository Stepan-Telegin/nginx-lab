<?php
session_start();

$username = htmlspecialchars($_POST['username'] ?? '');
$birthdate = htmlspecialchars($_POST['birthdate'] ?? '');
$topic = htmlspecialchars($_POST['topic'] ?? '');
$materials = isset($_POST['materials']) ? htmlspecialchars($_POST['materials']) : 'Нет';
$format = htmlspecialchars($_POST['format'] ?? '');

$errors = [];
if(empty($username)) $errors[] = "Имя не может быть пустым";
if(empty($birthdate)) $errors[] = "Дата рождения обязательна";

if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    header("Location: index.php");
    exit();
}

$_SESSION['username'] = $username;
$_SESSION['birthdate'] = $birthdate;
$_SESSION['topic'] = $topic;
$_SESSION['materials']= $materials;
$_SESSION['format'] = $format;

$line = $username . ";" . $birthdate . ";" . $topic . ";" . $materials . ";" . $format . "\n";
file_put_contents("data.txt", $line, FILE_APPEND);

header("Location: index.php");
exit();