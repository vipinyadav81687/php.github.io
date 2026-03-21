 <?php
 $fruit = ['orange', 'banana', 'apple', 1 => 'grapes'];
 $veggie = ['carrot', 'pea'];

 $newArray = array_replace($fruit, $veggie);


 echo "<pre>";
 print_r($newArray);
  echo "<pre>";

?>

<?php
$array1= ["a"=>["red"],"b"=>array("green","pink")];

$array2= ["a"=>["yellow"],"b"=>array("black")];

$newArray2 = array_replace_recursive($array1,$array2);
echo "<pre>";
print_r($newArray2);
echo "</pre>";

