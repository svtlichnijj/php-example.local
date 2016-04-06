<?php
//header("Content-Type:text/plain");
echo "<p><i>Завдання #1</i></p><br>
<form method='post' action='index.php'>
    Введіть n: <input type='number' min='4' max='9999' name='sum'>
    <input type='submit' value='Сума n-чисел'><br>
</form>";
if (!empty($_POST["sum"])) {
    $num = htmlspecialchars($_POST["sum"]);
    if ($num) {
        $sum = 0;
        echo 'Надіслано: ', $num,'<br>';
        for ($s = 1; $s <= $num; $s += 3) {
            $sum += $s;
            echo $s,'+';
        }
        echo '<p><b> = ', $sum, '</b><p>';
    }
}
echo '<hr>';

echo "<p><i>Завдання #2</i></p>
<p>Array [a] => [a^2]</p>";
for ($ar = 1; $ar <= 10; $ar++) {
    $arSqrt[$ar] = pow($ar,2);
}
echo '<pre>', print_r($arSqrt,true), '</pre>';
echo '<hr>';

echo "<p><i>Завдання #3</i></p><br>
<form method='post' action='index.php'>
    Введіть число: <input type='number' min='1' max='3333' name='chet'>
    <input type='submit' value='Парне/Не парне'><br>
</form>";
if (!empty($_POST["chet"])) {
    $chet = htmlspecialchars($_POST["chet"]);
    if (!($chet%2)) {
        echo 'Надіслано парне число: ', $chet,' / 2<br>';
        echo '<p><b> = ', $chet / 2, '</b><p>';
    } else {
        echo 'Надіслано непарне число: ', $chet,' * 3 <br>';
        echo '<p><b> = ', $chet * 3, '</b><p>';
    }
}
echo '<hr>';

echo "<p><i>Завдання #4</i></p><br>
<form method='post' action='index.php'>
    #1: <input type='number' min='1' max='9999' name='first'> ?
    #2: <input type='number' min='1' max='9999' name='second'>
    <input type='submit' value='Різниця менше 20?'><br>
</form>";
if (!empty($_POST["first"]) && !empty($_POST["second"])) {
    echo 'Надіслано числа: ', $_POST["first"],' і ',$_POST["second"],'<br>';
    if (abs($_POST["first"] - $_POST["second"]) <= 20) {
        echo '<p><b>Так</b><p>';
    } else {
        echo '<p><b>Ні</b><p>';
    }
}
echo '<hr>';

echo '<p><i>Extra #</i></p><br>
    - - - Вхідний масив<br>';
for ($ran = 0; $ran < 10; $ran++) {
    $arRandom[$ran] = rand(-20, 20);
}
echo '<pre>', print_r($arRandom,true), '</pre>

    - - - function sort()<br>';
$arSort = $arRandom;
sort($arSort);
echo '<pre>', print_r($arSort,true), '</pre>

    - - - function MySort(&)<br>';
function MySort(array &$input) {
    $stop = false;
    while(!$stop) {
        $stop = true;
        for ($i = 0; $i < count($input) - 1; $i++) {
            if ($input[$i] > $input[$i+1]) {
                $temp = $input[$i];
                $input[$i] = $input[$i+1];
                $input[$i+1] = $temp;
                $stop = false;
            }
        }
    }
}
MySort($arRandom);
echo '<pre>', print_r($arRandom,true), '</pre>';

echo '<hr>';
?>