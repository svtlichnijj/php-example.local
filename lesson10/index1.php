<?php
    require_once '../functions/fs.php';

    $fileName = "file.txt";

//    $handle = fopen($fileName, 'a');
//    fwrite($handle, "\tHello World 222\r\n");
//    fclose($handle);

    $handle = fopen($fileName, 'r');
    $str = fread($handle, filesize($fileName));
    echo $str;
    fclose($handle);
echo '<hr>';
    $str = file_get_contents($fileName);
    echo $str;
echo '<hr>';

$fileName = 'file.txt';
$content = get_file_content($fileName);
echo $content;
echo '<hr>';

$dir_handle = opendir('..');
$arDirs[] = readdir($dir_handle);
$arDirs[] = readdir($dir_handle);
$arDirs[] = readdir($dir_handle);
$arDirs[] = readdir($dir_handle);
$arDirs[] = readdir($dir_handle);
$arDirs[] = readdir($dir_handle);
$arDirs[] = readdir($dir_handle);
$arDirs[] = readdir($dir_handle);
$arDirs[] = readdir($dir_handle);
$arDirs[] = readdir($dir_handle);
$arDirs[] = readdir($dir_handle);
$arDirs[] = readdir($dir_handle);
$arDirs[] = readdir($dir_handle);
$arDirs[] = readdir($dir_handle);
$arDirs[] = readdir($dir_handle);
$arDirs[] = readdir($dir_handle);
echo '<pre>';
//var_dump($arDirs);
echo '</pre>';
echo '<hr>';

function scan($path){
    $dir_handle = opendir($path);
    $dir_path = readdir($dir_handle);
    while($dir_path = readdir($dir_handle)){
        if(is_dir($path."/".$dir_path)) {
            if(strcmp($dir_path, '.')) {
                $arDirs[] = $dir_path;
            }
            if(strcmp($dir_handle, '..')) {
                $arDirs[] = $dir_path;
            }
        }
    }

    var_dump($arDirs);
    ///return $path;
}

echo '<pre>';
var_dump(scan('..'));
echo '</pre>';
echo '<hr>';