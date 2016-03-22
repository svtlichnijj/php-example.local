<?php
/**
 * Created by PhpStorm.
 * User: svtlichnijj
 * Date: 11.03.16
 * Time: 14:10
 */
echo 'Zadacha #1', '<br><br>';
$a = 1;
$b = 2;
$c = 3;
echo 'a=', $a,' b=', $b,' c=', $c, '<br>';
$rez;
if ($a < $c) {
    echo 'a + b / c * a = ', '<br>';
    $rez = $a + $b / $c * $a;
} elseif ($a == 10) {
    $x = 'X = 100';
    $rez = $x;
} elseif ($a > $c) {
    echo 'c * 3 * b + c / c * sqrt(c) = ', '<br>';
    $rez = $c * 3 * $b + $c / $c * sqrt($c);
}
echo $rez;

echo '<hr>';

echo 'Zadacha #2', '<br><br>';

$name = 'Тарас';
$age = 24;
print("Меня зовут $name");
echo '<br>';

$years;
if ( $age > 10 && $age < 21 ) {
    $years = 'лет';
} elseif ( $age%10 == 1 ) {
    $years = 'год';
} else {
    $years = 'года';
}
print("Мне $age $years");

echo '<hr>';

echo 'Zadacha #3', '<br><br>';

$mnog = sqrt(3) * 4;
$side = 5;
$S = $mnog * pow($side, 2);
print_r ("a = $side, S = $S");

echo '<hr>';