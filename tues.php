<?php


$startingWord = "079008675d64";

$array = (str_split($startingWord));

$newWord = array();

foreach ($array as &$value) {

    if ((ord($value)) <= ord("9") && (ord($value)) >= ord("0") || (ord($value)) == ord("+")) {
        array_push($newWord, $value);
    }
}

$implodedWord = implode(" ", $newWord);

$finishedWord = str_replace(' ', '', $implodedWord);

if (strlen($finishedWord) == 11 && (substr($finishedWord, 0, 2)) == '07') {
    echo "Phone number validated: " . $finishedWord;
} else {
    echo "you shall not pass!";
}

?>

