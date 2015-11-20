<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

</head>
<body>
<table>
    <tr>
        <th>№</th>
        <th>model auto</th>
    </tr>
    <?php
    $cars = ['audi', 'bmw', 'ford'];
    foreach ($cars as $key => $car): ?>
        <tr>
            <td><?= $key + 1; ?></td>
            <td><?= $car; ?></td>
        </tr>
        <?
    endforeach;
    ?>
</table>
<?php
/*function numbers_sort($random_nums)
{
    $num_array = [];
    for ($i = 0; $i < $random_nums; $i++) {
        $num_array[] = rand(0, 15);
    }
    arsort($num_array);
    foreach ($num_array as $numder) {
        echo $numder . "<br>";
    }
}

numbers_sort(10);*/

?>
<table border="1">
    <tr>
        <th>Область</th>
        <th>Город</th>
    </tr>
    <?php
    $citys_arr = [
        'Донецкая обл.' => ['Донецк', 'Макеевка'],
        'Харьковская обл.' => ['Харьков', 'Изюм']
    ];
    foreach ($citys_arr as $key => $reg): ?>
        <tr>
            <td><?= $key ?></td>
            <td><?php foreach ($reg as $city): ?>
                    <?= $city . '<br>' ?>
                <?php endforeach; ?>
            </td>
        </tr>
    <?php endforeach;
    ?>
</table>

<?php

/*$info = array('кофе', 'коричневый', 'кофеин');

// Составить список всех переменных
list($drink, $color, $power) = $info;
echo "$drink - $color, а $power делает его особенным.\n";

// Составить список только некоторых из них
list($drink, , $power) = $info;
echo "В $drink есть $power.\n";

// Или только третья
list( , , $power) = $info;
echo "Мне нужен $power!\n";

// list() не работает со строками
list($bar) = "abcde";
var_dump($bar); // NULL
list($a, list($b, $c)) = array(1, array(2, 3));
echo $a+$b;*/
?>
<?php
$number = 1234.56;
// В США используются знаки $ , и .
// $formatted1 содержит $1,234.56
$usa = new NumberFormatter("en-US", NumberFormatter::CURRENCY);
$formatted1 = $usa->format($number);
echo $formatted1 . '<br>';
// Во Франции используются знаки , и €
// $formatted2 содержит 1 234,56 €
$france = new NumberFormatter("ru-RU", NumberFormatter::CURRENCY);
$formatted2 = $france->format($number);
echo $formatted2. "<br>";

$fmt = new IntlDateFormatter('ru_RU', IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Chicago');
// Часовой пояс Z соответствует UTC
$obj = new DateTime('2013-08-20T12:34:56Z');
$parts = array('tm_sec' => 56,
    'tm_min' => 34,
    'tm_hour' => 12,
    'tm_mday' => 20,
    'tm_mon' => 7, /* 0 = январь */
    'tm_year' => 113); /* 0 = 1900 */
print $fmt->format($obj) . "<br>";
print $fmt->format($parts) . "\n";

$ogg= range(1,52,2);
//var_dump($ogg);
foreach($ogg as $int){
    echo $int .', ';
}

?>
<p>Новое изменение</p>
</body>
</html>
