<?php

// function to filter and remove any character that are not digit; allow + sign

//Ross's code

$input = "nljheagh2364=+0";

function filterInput ($input) {
    //take input
    //remove anything that is not a digit
    //ignore +
    //return a result
    $text = $input;
    return preg_replace('/[^0-9]/', NULL, $text);
}
echo filterInput("nkvd89234hgwng+");

function validateTelNo ($number){
    //true begin 07 11 digit long
    $number = filterInput($string);
    if ($number[0] == 0 && $number[1] == 7 && strlen($number) == 11){
        echo $number;
    }
    else {
        echo "Your number didnot pass validation!";
    }
}
echo validateTelNo($input);

//Connor's code
//function removeNonNumerics ($text){
//    $new_text = $text;
//    $length = strlen($new_text);
//    for ($i = 0; $i < $length; $i++){
//        $char = substr($new_text, $i, 1);
//        $ascii = ord($char);
//        if ((($ascii >= ord('0') && ($ascii <= ord('9'))) || ($ascii == ord('+')))){
//            $new_text[$i] = $char;
//        }
//        else $new_text[$i] = '';
//    }
//    return $new_text;
//}
//$test_string = "23412i+uegd+hsi+qw u124321e+kjsdb+klajsh";
//echo removeNonNumerics($test_string);