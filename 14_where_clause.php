<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "learn";

$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("Sorry we failed to conenct:".mysqli_connect_error());
}else{
    echo "Connection was successful<br>";
}
//Usagae of where clause to fetch data from the db
$sql = "SELECT * FROM `phptrip` WHERE `dest` = 'canada' ";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
echo $num;
echo " records found in database<br>";


if($num>0){
    $no =1;
    while($row=mysqli_fetch_assoc($result) ){
        echo $no . " Hello ". $row['name']. " welcome to ".$row['dest'];
        echo "<br>";
        $no++;
    }
}

// usage of where caluse to updated data
$sql = "UPDATE `phptrip` SET `name` = 'michael' WHERE `sno` = 4";
// returns boolean value
$result = mysqli_query($conn,$sql);
//prints number of affected rows
$aff = mysqli_affected_rows($conn);
echo "<br> Number of affected rows: $aff";

if($result){
    echo "We updated the record successfully";
}else{
    echo "we could not update the record successfully";
}
?>