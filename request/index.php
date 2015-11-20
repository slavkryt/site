<?php
/**
 * Запросы: GET, POST, REQUEST
 */ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $news = [
        1 => [
            'title' => 'Заголовок 1',
            'text' => 'Основной текст 1'
        ],
        2 => [
            'title' => 'Заголовок 2',
            'text' => 'Основной текст 2'
        ]
    ];
    $id = $_GET['id'];
    /*
    $article = $news[$id];
    var_dump($news[$id]);
    var_dump($article);
    */
    ?>
    <p><?= $news[$id]['title']?></p>
    <p><?= $news[$id]['text']?></p>
</body>
</html>