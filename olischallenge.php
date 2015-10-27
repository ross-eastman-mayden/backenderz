<?php

//input string of characters
//remove any non-numeric characters
//ignore "+"
//output error if any non-numerics are found and DIE
//return string

//regex??
//while loops??


function strip($string)
{
    return preg_replace('/[^0-9\+]/', null, $string); // Removes special chars.
}

$string = "075252sfsf87782";

$string = strip($string);

function validate($string)
{
    if ((strlen($string) != 11) || (substr($string, 0, 2)) != '07') {
        return false;
    } else {
        return true;
    }
    //does $string start with 07?
    //is $string 11 digits long?
}

if (validate($string)) {
    echo $string;
} else {
    echo 'failed validation';
}
?>