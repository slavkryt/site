<?php
$mysqli = mysqli_connect('localhost', 'root', '','test_db');
$query = "SELECT DISTINCT id, actor FROM test_db.actors";
$result = mysqli_query($mysqli, $query);
while ($row = mysqli_fetch_array($result)) {
    echo $row['id'].'-'.$row['actor'].'<br>';
}