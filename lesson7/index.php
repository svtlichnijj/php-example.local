<?php
/*  function mas($mas) {
    for ($i = 0; $i < count($mas); $i++) {
        if($mas[$i]%2) {
            $mas[$i] = pow($mas[$i],3);
        }
    }
    return $mas;
}*/

$maas = [5,6,8,9,2,8,1,7];
print_r($maas);
echo '<br>';
$arMas = mas1($maas);

function mas1($mas) {
    $max = $mas[0];
    $min = $mas[0];
    $ind_min = 0;
    $ind_max = 0;
    for($j = 1; $j < count($mas); $j++) {
        if ($mas[$j] > $max) {
            $ind_max = $j;
            $max = $mas[$j];
        }
        if ($mas[$j] < $min) {
            $ind_min = $j;
            $min = $mas[$j];
        }
    }
    $temp = $mas[$ind_max];
    $mas[$ind_max] = $mas[$ind_min];
    $mas[$ind_min] = $temp;
    return $mas;
}
print_r($arMas);
echo '<hr>';
?>
<script>
//    alert('Hello Word!');
    function sum1() {
        var sum = 0;
        for (var i = 0; i < arguments.length; i++) {
            sum += arguments[i];
        }
        return sum;
    }
    alert(sum1(1,2,3,4,5,6))
</script>
<?php
 function sum($a, $b, $c) {
     return $a + $b + $c;
 }
echo sum(1, 2, 3), '<br>';
$arNum = [1, 2, 3, 4];
echo sum(...$arNum), '<br>';

function foo(...$arguments) {
    $sum = 0;
    foreach($arguments as $argument) {
        $sum += $argument;
    }
    return $sum;
}

echo foo(2, 3, 5);
echo '<hr>';

$str = 'Hello, my name is Evgeniy... Evgeniy, Evgeniy';

echo $str[0], "<br>";
//$str[0] = 'K';



echo strlen($str), "<br>";

$search = 'Evgeniy';

$len = strlen($search);

$index = strpos($str, $search);


echo $str, "<br>";
//$str = str_replace($search, 'Vasya', $str);

$start = strpos($str, $search);
$len = strlen($search);
$strLeft = substr($str, 0, $start);
$strRight = substr($str, $start + $len);
$str = $strLeft."Vasya".$strRight;
echo $strLeft, "<br>";
echo $strRight, "<br>";
echo $str, "<br>";

echo "<br>----------------------<br>";
$str = 'Hello, my name is Evgeniy... Evgeniy, Evgeniy';
$first = strpos($str, $search);
$two = strpos($str, $search, $first + 1);
$len = strlen($search);
$strLeft = substr($str, 0, $two);
$strRight = substr($str, $two + $len);
$str = $strLeft."Vasya".$strRight;

echo $strLeft, "<br>";
echo $strRight, "<br>";
echo $str, "<br>";

echo '<hr>';

function palindrom($str) {
    $str = str_replace(' ', '', $str);
    $str = strtolower($str);
    $str_revers = strrev($str);
    echo $str, '<br>';
    if($str == $str_revers) {
        return true;
    } else {
        return false;
    }
}

//$str = 'арозаупаланалапуазора';
$str = 'Fooof';

if(palindrom($str)) {
    echo 'Ok','<br>';
} else {
    echo 'No','<br>';
}

?>