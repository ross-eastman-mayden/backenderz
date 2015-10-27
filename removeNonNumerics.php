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

function phoneNumberValidation ($text){
    $firstChars = getFirstTwoCharacters($text);
    if (strlen($text) != 11){
        return false;
    }
    elseif ($firstChars != '07'){
        return false;
    }
    else return true;
}

function getFirstTwoCharacters ($text) {
    $chars = substr($text, 0, 2);
    return $chars;
}

$test_string = "07970557308";

$string =  removeNonNumerics($test_string);

if(phoneNumberValidation ($string)){
    echo $string;
}
else {
    echo "Number did not pass validation";
}

?>