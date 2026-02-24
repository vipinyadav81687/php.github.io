<?php

// $per = 75;

// if($per >=80 && $per <= 100){
//     echo "you are in merit";
// }elseif($per>=60 && $per <= 80 ){
//     echo "you are in first division";
// }elseif($per>=45 && $per<60 ){
//     echo "you are in second devision ";

// }elseif($per>=33 && $per<45 ){
//     echo "you are in third devision";
// }elseif($per<33){
// echo  "you are fail";
// }else{
//     echo "please Enter the valid percentage";
// }


$per = 75;

if($per >=80 && $per <= 100):
    echo "you are in merit";
elseif($per>=60 && $per <= 80 ):
    echo "you are in first division";
elseif($per>=45 && $per<60 ):
    echo "you are in second devision ";

elseif($per>=33 && $per<45 ):
    echo "you are in third devision";
elseif($per<33):
echo  "you are fail";
else:
    echo "please Enter the valid percentage";
endif;