<?php
$fruit = ["orange", "banana","grapes"];
$veggie = ['carrot','pea'];
$color = ['red','blue'];

$newArray = array_merge($fruit,$veggie,$color);

echo "<pre>";
print_r($newArray);
echo "</pre>";



$fruit2 = ['a'=>"orange", 'b'=>"banana","grapes"];
$veggie2 = ['carrot','pea'];


$newArray2 = array_merge($fruit2,$veggie2);

echo "<pre>";
print_r($newArray2);
echo "</pre>";


$fruit3 = ['a'=>"orange", 'b'=>"banana","grapes"];
$veggie3 = ['b'=>['color'=>['red','blue','green']],
'e' =>'pea',
55,
68
];


$newArray3 = array_merge_recursive($fruit3,$veggie3);

echo "<pre>";
print_r($newArray3);
echo "</pre>";


?>

<?php
$name = array("Ram","Mohan","Salman");

$age = array("35","37","43");

$newArray4 = array_combine($name,$age);

echo "<pre>";
print_r($newArray4);
echo "</pre>";

?>