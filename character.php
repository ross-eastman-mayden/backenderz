<?php

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

$test_string = "234 1 2i+ uegd,+ hsi+qw !@.<£$adf%^&*(xcv)_*-+*/=*sdfb-+u124321 e+kjsd b+ kla j sh";

echo removeNonNumerics($test_string);

?>