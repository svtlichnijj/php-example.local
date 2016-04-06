<?php
/**
 * Created by PhpStorm.
 * User: svtlichnijj
 * Date: 09.03.16
 * Time: 20:01
 */
$a = 19;
$b = 11;

if ($a == $b) {
    echo "$a == $b";
} else {
    echo "$a != $b";
}

echo "<hr>";

if ($a == $b) {
    echo "$a == $b", '<br>';
} elseif ($a > $b) {
    echo "$a > $b", '<br>';
} elseif ($a < $b) {
    echo "$a < $b", '<br>';
} else {
    echo "$a != $b", '<br>';
}

echo "<hr>";

$a = 23;
$b = 55;
$c = 5;

$res = $a / $b;
$res += $c;
echo $res, '<br>';

echo "<hr>";

$a = 23;
$b = 55;
$c = 5;

$res = $a / $b;
$res = round($res,2);
echo $res, '<br>';
$res = floor($res);
$res += $c;
echo $res, '<br>';

echo "<hr>";

$a = 2;
$res = pow($a, 1/3);
echo 'pow() ', $res, '<br>';

echo "<hr>";

$a = 8;
$res = sqrt($a);
echo 'sqrt ', $res, '<br>';

echo "<hr>";

$res = 33 / "4asd";
echo '33 / "4asd" ', $res, '<br>';

echo "<hr>";

$a = 3;
$b = 4;
$c = 10;

if ($a < $b && $a < $c) {
    echo 'Hello','<br>';
} else {
    echo 'World','<br>';
}

echo "<hr>";

$a = 3;
$b = 4;
$c = 10;

if ($a > $b || $a > $c || $c = -10) {
    echo 'Hello true','<br>';
} else {
    echo 'World false','<br>';
}

echo "<hr>";

$switch = 'print';

switch($switch) {
    case $a < $b:
        echo "$a < $b", "1 <br>";
    case 'print':
        echo $switch, "2 <br>";
        break;
    case 'echo':
        echo $switch, "3 <br>";
        break;
    default;
        echo 'default: ', $switch, '<br>';
}

echo "<hr>";

$arNumbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
var_dump($arNumbers);
echo "<pre>";
echo 'size = ', sizeof($arNumbers),'; ';
print_r($arNumbers);
echo $arNumbers[4];

$arStrings = array('ddd', 'ffff', 'dfdfd', $switch);
var_dump($arStrings);
echo "<hr>";
$arStrings[] = 'sds';
var_dump($arStrings);

unset($arStrings[1]);
echo 'unset( ',var_dump($arStrings),' ) ';

echo "<hr>";


$arStrings= array('name' => 'Vasya', 'age'=> 22);
var_dump($arStrings);
echo $arStrings['name'];
$arStrings['name'] = 'fff';
var_dump($arStrings);

$arStrings[] = 'lflflf';
$arStrings[555] = 'lflflf';
$arStrings[] = 'lflflf';
$arStrings[] = 'lflflf';

var_dump($arStrings);
echo "<hr>";


