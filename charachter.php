<?php

echo "connect";

function removeNonNumerics ($text){
    $new_text = $text;
    $length = strlen($new_text);
    for ($i = 0; $i < $length; $i++){
        $char = substr($new_text, $i, 1);
        $ascii = ord($char);
        if (!((($ascii >= ord('0') && ($ascii <= ord('9'))) || ($ascii == ord('+'))))) {
            $new_text[$i] = '';
        }
    }
    return $new_text;

}

$test_string = "23412i+uegd+hsi+qw u124321e+kjsdb+klajsh";

echo removeNonNumerics($test_string);
?>