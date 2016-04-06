<?php

$str = 'Hello, my name is Evgeniy... Evgeniy, Evgeniy';

$pattern = '/hello/i';
echo $str, '<br>';
echo preg_replace($pattern, 'L', $str);
echo '<hr>';

$strNumb = "w4qf4wfdїfs46fХуweуугуrw5";

$numb = preg_replace('/[^а-яїЇ]*/i', '', $strNumb);
echo $numb, "<br>";
$rattern = '/[+-]?\d+\./?\d*/';
echo '<hr>';

$subject = "abcdfe";
$pattern = '/[dfe]/';
echo $subject, '<br>';
preg_match_all($pattern, $subject, $matches);
echo '<pre>';
print_r($matches);
echo '</pre>';
echo '<hr>';

$html = "fsdgae<br>fgh</br>>sdvssgsg32<br>";
$html = "fsdgae<p>fgh</p>>sdvssgsg32";
$pattern = '/<br>/';
if(preg_match($pattern, $html)){
    echo "Error", "<br>";
} else {
    echo "Okey", "<br>";
}
echo "<hr>";

$html = '<table border="1"><tr><td class="head">Article</td><td class="head">Name</td></tr><tr><td class="val">erte45455</td><td class="val">IPhone 4</td></tr></table>';
$matches = [];
$pattern = '/<td class="head">([a-z]+)<\/td>/i';
preg_match_all($pattern, $html, $matches);

$pattern1 = '/<td class="val">([a-z0-9 ]+)<\/td>/i';
$matches2 = [];
preg_match_all($pattern1, $html, $matches2);

$arProps = [];
foreach ($matches[1] as $key => $name) {
    $arProps[] = [
        'NAME' => $name,
        'VALUE' => $matches2[1][$key],
    ];
}

echo '<pre>';
var_dump($matches);
var_dump($matches2);
echo '<hr>';
print_r($arProps);
echo '</pre>';
?>

<table border='1'>
    <tr>
        <td class="head">Article</td>
        <td class="head">Name</td>
    </tr>
    <tr>
        <td class="val">ertye456</td>
        <td class="val">iPhone 4</td>
    </tr>
</table>
