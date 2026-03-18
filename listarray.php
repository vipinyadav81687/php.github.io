<?php
$emp = [
    [1,"krishna","Manager",50000],
    [2,"salman","Salesman",20000],
    [3,"Mohan","Computer",12000],
    [4,"Amir","Driver",5000]
];

foreach($emp as list($id, $name, $designation, $salary)){
       echo "$id $name $designation $salary <br>";
}
echo "<br>";


echo "<table border='1px' cellpadding='5px' cellspacing='0px'>";
echo "<tr>
<th>Emp Id. </th>
<th>Emp Name</th>
<th>Designation</th>
<th>Salary</th>
</tr>";
foreach($emp as list($id, $name, $designation, $salary)){
       echo "<tr><td>$id</td> <td>$name</td> <td>$designation</td> <td>$salary</td> </tr>";
}
echo"<table>";

