<?php
/**
 * Created by PhpStorm.
 * User: martapleszynska
 * Date: 27/10/15
 * Time: 11:07
 */
// function to filter and remove any character that are not digit; allow + sign

//Ross's code
public function filterInput ($input) {
    //take input
    //remove anything that is not a digit
    //ignore +
    //return a result
    return preg_replace('/[^0-9\+]/', NULL, $input);
}
echo filterInput("nkvd89234hgwng+");

//Connor's code
function removeNonNumerics ($text){
    $new_text = $text;
    $length = strlen($new_text);
    for ($i = 0; $i < $length; $i++){
        $char = substr($new_text, $i, 1);
        $ascii = ord($char);
        if ((($ascii >= ord('0') && ($ascii <= ord('9'))) || ($ascii == ord('+')))){
            $new_text[$i] = $char;
        }
        else $new_text[$i] = '';
    }
    return $new_text;
}
$test_string = "23412i+uegd+hsi+qw u124321e+kjsdb+klajsh";
echo removeNonNumerics($test_string);
