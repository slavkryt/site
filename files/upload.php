<?php
//var_dump($_FILES);
$uploaddir = './pictures/';
$uploadfile = $uploaddir . basename($_FILES['image']['name']);
if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
//    echo "Файл корректен и был успешно загружен.\n";
    header('Location: /files/index.php');
    exit;
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}