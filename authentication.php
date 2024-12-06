<?php
// ### 2 AUTHENTICATION SYSTEM 


define("USERNAME","admin");
define("PASSWORD","000000");

echo "ENTER USER NAME : ";
$userName = readline();

echo "ENTER PASSWORD : ";
$password = readline();

if($userName === USERNAME && $password === PASSWORD){
    echo "=========== LOGGED IN SUCCESSFULLY ================ \n";
    echo " USERNAME IS : $userName \n";
    echo " PASSWORD IS : $password";

}elseif($userName !== USERNAME){
    echo "============ LOGIN FAILED ============ \n";
    echo "PASSWORD MATCHED YOU TYPE : $password";
    echo "USERNAME NOT MATCHED OK ! \n";
    echo "YOU CAN TYPE  : $userName";
}elseif($password !== PASSWORD){
    echo "============ LOGIN FAILED ============ \n";
    echo "USERNAME MATCHED OK ! YOU TYPE :  $userName \n";
    echo "PASSWORD NOT MATCHED OK ! \n";
    echo "YOU CAN TYPE  : $password";
}else{
    echo " LOGIN FAILED";
}




















?>