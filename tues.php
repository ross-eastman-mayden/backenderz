<?php


$startingWord = "s9kd jf..lsjs3(3klj23+kjl";

$array = (str_split($startingWord));

$newWord = array();

foreach ($array as &$value) {

    if((ord($value)) < 65 && (ord($value)) >= 47 || (ord($value)) == 43 ) {
        array_push($newWord, $value);
    }
}

$implodedWord = implode(" ",$newWord);

$finishedWord = str_replace(' ', '', $implodedWord);

echo $finishedWord;


?>

