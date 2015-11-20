<?php

require_once __DIR__.'/functions.php';

if (!isUser()) {
    header('Location: /sessions/form.html');
    exit;
}
?>
<h2>Hello, <?= getUser() ?>!</h2>
<a href="/sessions/logout.php">Exit</a>