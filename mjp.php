<?php

interface Filter
{
    public function filter($input);
}

class PhoneFilter implements Filter
{
    public function filter($input)
    {
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
    public function validate($number)
    {
        $result = false;
        if ($number[0] == 0 && $number[1] == 7 && strlen($number) == 11) {
            $result = true;
        }
        return $result;
    }
}
$number = "0786182sag1434";
$phoneFilter = new PhoneFilter();
$output = $phoneFilter->filter($number);
$phoneValidator = new PhoneValidator();
if ($phoneValidator->validate($output))
{
    echo $number;
}
else
{
    echo "Invalid!";
}

//public function printResult($number)
//{
//    if () {
//        echo $number;
//    } else {
//        echo "Your number did not pass validation!";
//    }
//}
