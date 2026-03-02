<?php
// function hello($name){
//     echo "Hello $name . <br>";
    
// }

// hello("vipin yadav");


// function hello2($fname,$lname){
//     echo "Hello $fname $lname.<br>";
// }
// hello2("vipin","Yadav");

// hello2("cp","yadav");



function hello2($fname="vipin",$lname="yadav"){
    echo "Hello $fname $lname.<br>";
}
hello2("vipin");

hello2("cp",);

function sum($a, $b){
    echo $a + $b;
}

$one = 10;
$two = 20.55;
sum($one, $two);