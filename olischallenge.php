<?php

    //input string of characters
    //remove any non-numeric characters
    //ignore "+"
    //output error if any non-numerics are found and DIE
    //return string

    //regex??
    //while loops??


    function strip($string)
        {
            return preg_replace('/[^0-9\+]/', NULL, $string); // Removes special chars.
        }


    $string = "khjhdfgkjhdfg08754678936\';][+";

    echo strip($string);
