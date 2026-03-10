<?php
$emp = [
    [1,"krishna","Manager",50000],
    [2,"salman","Salesman",20000],
    [3,"Mohan","Computer",12000],
    [4,"Amir","Driver",5000]
];


echo $emp[0][0] . " ";
echo $emp[0][1] . " ";
echo $emp[0][2] . " ";
echo $emp[0][3] . " ";
echo "<br>";
echo $emp[1][0] . " ";
echo $emp[1][1] . " ";
echo $emp[1][2] . " ";
echo $emp[1][3] . " ";
echo "<br>";
echo $emp[2][0] . " ";
echo $emp[2][1] . " ";
echo $emp[2][2] . " ";
echo $emp[2][3] . " ";
echo "<br>";
echo $emp[3][0] . " ";
echo $emp[3][1] . " ";
echo $emp[3][2] . " ";
echo $emp[3][3] . " ";
echo "<br>";

for($row=0; $row<4; $row++ ){
    
for($col=0; $col<4; $col++ ){
echo $emp[$row][$col] . " ";
}
echo "<br>";
}
echo "<br>";



echo "<table border='2' cellpadding='5' cellspacing='0'>";
echo "<tr>
<th>Emp Id. </th>
<th>Emp Name</th>
<th>Designation</th>
<th>Salary</th>
</tr>";
foreach($emp as $v1){
    echo "<tr>";
    foreach($v1 as $v2){
        echo "<td> $v2 </td>";
}
echo "</tr>";
}
echo"</table>";




echo "<pre>";
print_r($emp);
echo "<pre>";


?>