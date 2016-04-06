<?php
    $input = "input.txt";
    $output = "output.txt";
    $str1 = file_get_contents($input);

    $arInput = str_split($str1);

    echo $InputCount = count($arInput) - 1, "<br>";
    $arOutput = [];
    for($i = $InputCount; $i >= 0; $i--)
    {
        $arOutput[$InputCount-$i] = $arInput[$i];
    }
    $handle = fopen($output, 'a');
//    fwrite($handle, "\r\n\n");
    foreach($arOutput as $key => $value) {
        echo $value;
//        fwrite($handle, $value);
    }
    fclose($handle);
echo "<hr>";

    $arrayTxt = "array.txt";
    $resArrayTxt = "res_array.txt";
    $str2 = file_get_contents($arrayTxt);

    $arNum = explode(',',$str2);
    echo "<pre>";
    var_dump($arNum);
    $prod = 1;
    foreach($arNum as $key => $value) {
        $sum += $value;
        $prod *= $value;
    }
    echo $sum, "<br>", $prod;

    $handle = fopen($resArrayTxt, 'a');
//    fwrite($handle, "\r\n\n");
//    fwrite($handle, "Sum = ".$sum. "\nProduct = ".$prod);
    fclose($handle);
echo "<hr>";

    $adataTxt = "data.txt";
    $resDataTxt = "res_data.txt";
    $str3 = file_get_contents($adataTxt);

    $arData = explode("\n\n", $str3);
    echo "<pre>";
    var_dump(max($arData));
    $handle = fopen($resDataTxt, 'a');
//        fwrite($handle, "\r\n\n");
//        fwrite($handle, "Max = ".max($arData));
    fclose($handle);
echo "<hr>";