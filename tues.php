<?php


interface Validator
{
    public function validate($value);
}

class TelephoneValidator implements Validator
{
    public function validate($value)
    {
        $array = $this->stringToArray($value);
        $implodedWord = $this->filterValidCharacters($array);
        $finishedWord = $this->removeWhitespace($implodedWord);

        return $this->isAValidPhoneNumber($finishedWord);
    }

    protected function stringToArray($string)
    {
        return (str_split($string));
    }

    protected function filterValidCharacters($splitTelephoneNumber)
    {
        $newWord = array();

        foreach ($splitTelephoneNumber as &$ascii) {

            if ((ord($ascii)) <= ord("9") && (ord($ascii)) >= ord("0") || (ord($ascii)) == ord("+")) {
                array_push($newWord, $ascii);
            }
        }

        return implode(" ", $newWord);
    }

    protected function removeWhitespace($word)
    {
        return str_replace(' ', '', $word);
    }

    protected function isAValidPhoneNumber($finishedWord) {
        return (strlen($finishedWord) == 11 && (substr($finishedWord, 0, 2)) == '07');
    }
}


$telval = new TelephoneValidator();

if ($telval->validate("07900390893") == true) {
    echo "phone is valid";
} else {
    echo "not valid";
}


?>

