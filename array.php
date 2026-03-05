<?php
$colors = array("red", "yellow",20.5,"green");

echo $colors[0]."<br>";
echo $colors[1]."<br>";
echo $colors[2]."<br>";
echo $colors[3]."<br>";

// second method of storing a array
$has = [2,4,5,5,6];
echo "<pre>";
print_r($has);
echo "</pre>";


//  3rd method of storing the data 
$sub[0] = "hindi";
$sub[1] = "eng";
$sub[2] = "maths";
$sub[3] = "science";

echo"<pre>";
print_r($sub);
echo"</pre>";



$c = array("red", "yellow",20.5,"green");

for($i=0;$i<=3;$i++){
    echo $c[$i]."<br>";
}