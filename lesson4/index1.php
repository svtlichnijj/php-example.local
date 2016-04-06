<?php
echo 'Array';
$arExample = array (
    1 => 23, 32,
    2 => 49,
    3 => 80,
);
var_dump($arExample);

echo '<hr>';
echo 'WHILE <br>';
$num = 1;
while($num <= 10) {
    echo $num++ + ++$num, ', ';
}

echo '<br>===========<br>';

echo 'DO WHILE <br>';
do {
    echo $num++, ', ';
} while( $num <= 10 );

echo '<hr>';

$num = 0;
while($num <= 20 ) {
    if ( ++$num%2 != 0) {
        continue;
    }
    echo $num, ', ';
}

echo '<hr>';

echo 'FOR <br>';
for ($i = 1, $h = 2; $i <= 30; $i++, $h *= 2) {
    echo $i, ', ';
}
echo '<br>', $h;

echo '<hr>';

$arNum = array();

for ($i = 1, $h = 2; $i <= 10; $i++, $h *= 2) {
    $arNum[] = rand(-100, 10);
}
var_dump($arNum);

echo '<hr>';

$arPeople = array(
    array(
        'NAME' => 'Vasya',
        'Age' => 23,
        'FRIENDS' => array(
            array('NAME' => 'Oleg', 'Age' => 20),
            array('NAME' => 'Anna', 'Age' => 18),
        )
    ),
    array(
        'NAME' => 'Petya',
        'Age' => 20,
        'FRIENDS' => array(),
    ),
    array(
        'NAME' => 'Olya',
        'Age' => 18,
        'FRIENDS' => array(),
    ),
);

//print_r($arPeople);

foreach ($arPeople as $key => $arPerson) {
    echo $arPerson['NAME'], ": ", $arPerson['Age'],'<br>';
    if (!empty($arPerson['FRIENDS'])) {
        foreach ($arPerson['FRIENDS'] as $arFriend) {
            echo "---", $arFriend['NAME'], ": ", $arFriend['Age'],'<br>';
        }
    }
}

echo '<hr>';

foreach ($arPeople as $key => $asPerson) {
    if ($arPerson['NAME'] == 'Petya') {
        $arPeople[$key]['AGE'] = 21;
    }

}
echo '<pre>';
print_r($arPeople);

echo '<hr>';

foreach ($arPeople as $key => &$asPerson) {
    if ($arPerson['NAME'] == 'Petya') {
        $arPerson['AGE'] = 22;
    }

}
echo '<pre>';
print_r($arPeople);

echo'<hr>';
$a = 10;
$c = &$a;
var_dump($a);
var_dump($c);
 $c = 44;
var_dump($a);
var_dump($c);