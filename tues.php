<?php


function numericsOnly($startingWord) {

$array = (str_split($startingWord));

$newWord = array();

foreach ($array as &$value) {

    if((ord($value)) <= ord("9") && (ord($value)) >= ord("0") || (ord($value)) == ord("+") ) {
        array_push($newWord, $value);
    }
}

$implodedWord = implode(" ",$newWord);

$finishedWord = str_replace(' ', '', $implodedWord);

echo $finishedWord;

}

numericsOnly("23kjwlejkljsd-=asf;+lkjdsflj34a");

?>

