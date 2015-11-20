<?php
require_once __DIR__ . '/functions.php';

logout();
header('Location: /sessions/index.php');
exit;