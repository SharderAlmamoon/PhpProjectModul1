<?php 
// ### 1  NUMBER CLASSIFIER CHECK

echo "ENTER THE NUMBER : ";

$number = (int) readline();

if(0 < $number ){
    echo "THIS NUMBER IS POSITIVE & NUMBER IS : $number";
}else if(0 > $number){
    echo " THIS NUMBER IS NEGATIVE & NUMBER IS  : $number";
}else{
    echo "THIS NUMBER IS ZERO & NUMBER IS : $number";
}


// DONE 

?>