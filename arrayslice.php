<?php
$color = ['red','green','blue','yellow','brown'];


$newArray = array_slice($color,1,2);

echo "<pre>";
print_r($newArray);
echo "</pre>";

$color2 = ['a'=>'red','b'=>'green','42'=>'blue','d'=>'yellow','e'=>'brown'];

$newArray2 = array_slice($color2,1,2,true);


echo "<pre>";
print_r($newArray2);
echo "</pre>";