<?php
/**
 * Created by PhpStorm.
 * User: SS
 * Date: 23.10.2015
 * Time: 23:10
 */
$num1= $_POST['num1'];
$num2= $_POST['num2'];
switch($_POST['sign']){
    case '+':
        $res=$num1+$num2; break;
    case '-':
        $res=$num1-$num2; break;
    case '*':
        $res=$num1*$num2; break;
    case '/': if($num2==0){
        echo "На ноль делить нельзя";
    }else{
        $res=$num1/$num2;
    } break;
}
echo $res;