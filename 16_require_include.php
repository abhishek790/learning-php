<?php

// require and include both will import code form different file but the only difference is if there is error require will throw error and will not move to next line but incase of include it will throw error but continues the execution

// include '_dbconnect.php1';
require '_dbconnect.php';

$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the database<br>";
while($row = mysqli_fetch_assoc($result)){
    echo $row['sno']. " Hello  ". $row['name']. " Welcome to ". $row['dest'];
    echo "<br>";
}





?>