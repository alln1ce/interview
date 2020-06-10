<?php
require_once 'functions.php';

$file = __DIR__.'/file.txt';

if(strpos($file, '.csv') !== false){
    $result = csv_parse($file);
} else if(strpos($file, '.txt') !== false){
    $result = parseTxt($file);
} else if(strpos($file, '.xml') !== false){
    $result = getFromXml($file);
}

//Исправить на
//use FileHelper;
//$file = __DIR__.'/file.txt';
//$parser = FileHelper::getParser($file)
//$result = $parser->run();
