<?php
// $x= 10;
// function test(){
//      $x= 10;
//     echo "var x inside function: $x <br>";
// }
// test();
// echo "varble x outside function : $x";


$x = 10;
$y = 5;
function test(){
    global $x ,$y;
    $x = $x + $y;
}
test();
echo $x;

?>