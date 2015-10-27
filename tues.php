<?php


$startingWord = "skdjflsjs33klj23+kjl";

$array = (str_split($startingWord));

$newWord = array();

foreach ($array as &$value) {

    if((ord($value)) <= 65) {
        array_push($newWord, $value);
    }
}

$implodedWord = implode(" ",$newWord);

$finishedWord = str_replace(' ', '', $implodedWord);

echo $finishedWord;


?>

