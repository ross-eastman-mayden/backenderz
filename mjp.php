<?php

// function to filter and remove any character that are not digit; allow + sign

//Ross's code

function filterInput ($input) {
    //take input
    //remove anything that is not a digit
    //ignore +
    //return a result
    $text = $input;
    return preg_replace('/[^0-9]/', NULL, $text);
}
function validateTelNo ($input){
    //true begin 07 11 digit long
    $number = filterInput($input);
    if ($number[0] == 0 && $number[1] == 7 && strlen($number) == 11){
        echo $number;
        $result = true;
    }
    else {
        echo "Your number did not pass validation!";
        $result = false;
    }
    return $result;
}
echo validateTelNo("07861828475"); // valid input
echo "<br>";
echo validateTelNo("hashgro;idshbh0684+04+0"); // invalid input
echo "<br>";
echo validateTelNo("has0hg7r3o;idshbh0684+04+01"); // invalid input
echo "<br>";

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