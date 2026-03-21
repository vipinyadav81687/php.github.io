<?php
$food = array(
    'fruits' =>array('orange','banana', 'apple'),
    'veggie' => array('carrot', 'collard', 'pea')
);

echo sizeof($food,1);
echo "<br>";
echo sizeof($food);
echo "<br>";
echo count($food['fruits'],1)



?>