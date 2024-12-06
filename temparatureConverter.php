<?php

define("FIXEDVALUE1",9/5);
define("FIXEDVALUE2",32);

echo "ENTER TEMPERATURE VALUE : ";
$temperature = (float) readline();

echo " CONVERT TO  ( 1 : Fahrenheit & 2 : Celsius ) : ";
$press = (int) readline();

switch($press){
    case 1:
        $fahrenheit = $temperature * FIXEDVALUE1 + FIXEDVALUE2; 
        echo " Fahrenheit is : $fahrenheit";
        break;
        case 2 :
            $celsius = ($temperature - FIXEDVALUE2) / FIXEDVALUE1;
            echo " Celsius is : $celsius";
        break;
        default:
            echo " Don't Match The Information";
}






?>