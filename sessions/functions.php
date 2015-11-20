<?php
function isUser()
{
    return isset($_COOKIE['auth']);
}

function getUser()
{
    return $_COOKIE['auth'];
}
function checkLoginPassword($login, $password)
{
    $users = ['pupkin' => '123', 'ivanov' => 'qwerty'];
    return isset($users[$login]) && $password == $users[$login];
}

function login($login)
{
    setcookie('auth', $login, time() + 86400);
}
function logout()
{
    setcookie('auth', '', time() - 86400);
}