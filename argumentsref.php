<?php
// function testing($string){
//     $string .= " and sonting extra.";
// }
// $str = "This is a string ";
// testing($str);
// echo $str;

//  function testing(&$string){
//     $string .= " and sonting extra.";
// }
// $str = "This is a string ";
// testing($str);
// echo $str;

function first($num){
$num += 5;
}


function second(&$num){
$num +=7;
}

$number = 10;
first($number);
echo "Original value is $number<br>";

second($number);
echo "Original value is $number<br>";