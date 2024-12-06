<?php

// ### 3 ELECTRICITY BIL CALCULATOR 
// Define slabs for billing using if-else 
// (e.g., 1–100 units = $5, 101–200 units = $10,  201 to above units = $15).

echo "WELCOME TO OUR BILL COUNT CALCULATION. \n";
echo "ENTER YOUR MEETER UNITS : ";
$units = (int) readline();

if($units <= 100){
    $bill = $units * 5;
}elseif($units <= 200){
    $bill = 100 * 5 + ($units -100) *10; 
}elseif($units >=201){
    $bill = 100*5 + 100*10 + ($units - 200)*15;
}

echo "APPROXIMATELY BILL IS : $$bill ";


?>