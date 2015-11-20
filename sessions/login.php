<?php
$login = $_POST['login'];
$password = $_POST['password'];
require_once __DIR__.'/functions.php';
if (empty($_POST['login'] || empty($_POST['password']))||(!checkLoginPassword($login, $password))) {
    header('Location: /sessions/form.html');
    exit;
}
/*if (!checkLoginPassword($login, $password)) {
    header('Location: /sessions/form.html');
    exit;
}*/
login($login);
header('Location: /sessions/index.php');
exit;