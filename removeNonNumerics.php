<?php

function removeNonNumerics ($text)
{
    for ($i = 0; $i < strlen($text); $i++) {
        $ascii = ord(substr($text, $i, 1));
        if (!(($ascii >= ord('0') && $ascii <= ord('9')) || $ascii == ord('+'))) {
            $text[$i] = '';
        }
    }
    return $text;
}

$test_string = "1234 1 2i+ uegd,+ hsi+qw !@.<£$a'd'f%^&*(xcv)_*-+*/=*sdfb-+u124321 e+kjsd b+ kla j sh";

echo removeNonNumerics($test_string);

?>