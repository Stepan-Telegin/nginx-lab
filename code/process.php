<?php
session_start();

$username = htmlspecialchars($_POST['username'] ?? '');
$birthdate = htmlspecialchars($_POST['birthdate'] ?? '');
$topic = htmlspecialchars($_POST['topic'] ?? '');
$materials = isset($_POST['materials']) ? htmlspecialchars($_POST['materials']) : 'Нет';
$format = htmlspecialchars($_POST['format'] ?? '');

$_SESSION['username'] = $username;
$_SESSION['birthdate'] = $birthdate;
$_SESSION['topic'] = $topic;
$_SESSION['materials']= $materials;
$_SESSION['format'] = $format;

header("Location: index.php");
exit();