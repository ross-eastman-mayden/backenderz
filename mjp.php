<?php

// function to filter and remove any character that are not digit; allow + sign

//Ross's code
interface Filter
{
    public function filter($input);
}

class PhoneFilter implements Filter
{
    function filter($input)
    {
        //take input
        //remove anything that is not a digit
        //ignore +
        //return a result
        $text = $input;
        return preg_replace('/[^0-9]/', NULL, $text);
    }
}

interface Validator
{
    public function validate($number);
}

class PhoneValidator implements Validator
{
    function validate($number)
    {
        //true begin 07 11 digit long
        $result = false;
        if ($number[0] == 0 && $number[1] == 7 && strlen($number) == 11) {
            $result = true;
        }
        return $result;
    }
}

function printResult($number)
{
    if (validateTelNo()) {
        echo $number;
    } else {
        echo "Your number did not pass validation!";
    }
}

echo validate("07861828475"); // valid input
echo "<br>";
echo validate("hashgro;idshbh0684+04+0"); // invalid input
echo "<br>";
echo validate("has0hg7r3o;idshbh0684+04+01"); // valid input
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