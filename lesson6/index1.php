<?php
function my_print() {
    echo 'Hello World!!';
}
my_print();
echo "<hr>";
$c = 4;
function sum($a, $b) {
//    echo $c;
    echo $a +$b,"<br>";
}
sum(2, 3);
sum(2, 2);

$a1 = 3;
$b1 = 4;
sum($a1, $b1);
echo "<hr>";
function sum1($a, $b) {
//    echo $c;
    return $a +$b;
}
echo sum1(2, 3);
echo "<hr>";
function percent($price, $percent) {
    return $price * ($percent / 100);
}

echo percent(200, 15);
echo "<hr>";

function my_pow($val, $b, $pow = 2) {
    return pow($val, $pow);
}
echo my_pow(2, 3);
echo "<hr>";

function foo(&$a, $b) {
    $a += $b;
}
$a = 2;
$b = 3;
echo $a, "<br>";
foo($a, $b);
echo $a;
echo "<hr>";

$func = function() {
    echo 'Anonime';
};

$func();
$func = 'sum';
echo $func(2, 3);

$fun = 'func';
$$fun;

$var = 45;
$a = 'var';
echo "<br>", $$a;
//$a = 'func';
//$$a();

//$_REQUEST['fun'] = 'func';
//$_REQUEST['fun'] = 'sum';
//$_REQUEST['fun'](2, 3);
//
//$array = [
//    'func' => function($array1){
//        print_r($array1);
//    }
//];
//$array['func']([1,2,3,4,5]);
echo "<hr>";

function walk($array, $func) {
    foreach($array as $item) {
        $func($item);
    }
}

$arNum = [5,4,3,2,1];
walk($arNum, function($item) {
    echo $item, '<br>';
});

function arr($item) {
    echo $item, ': +<br>';
}
walk($arNum, 'arr');
echo "<hr>";

$arNum = [6,5,4,3,2];
function map($array, $func) {
    foreach($array as &$item) {
        $item = $func($item);
    }
    return $array;
}

$newArray = map($arNum, function($item) {
    return pow($item, 2);
});

echo "<pre>";
print_r($arNum);
print_r($newArray);
echo "</pre>";

$newArray = map($newArray, function($item) {
   return $item/2;
});

echo "<pre>";
print_r($newArray);
echo "</pre>";
echo "<hr>";

$arNum = [5,4,3,2,1];
$pow = 3;
$newArray = map($arNum, function($item) use($pow){
    return pow($item, $pow);
});
echo "<pre>";
print_r($newArray);
echo "</pre>";
echo "<hr>";

global $b;
$b = 2;
function bar($a) {
    global $b;
    return $a/$b;
}
