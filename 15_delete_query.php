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
// limit will affect only the specified number of record. it is optional 
$sql = "DELETE FROM `phptrip`  WHERE `dest` = 'canada' LIMIT 1";
$result = mysqli_query($conn,$sql);
$aff = mysqli_affected_rows($conn);
echo "<br>Number of rows affected:$aff<br>";

if($result){
    echo "Deleted successfully";
}else{
    echo "Not deleted successfully due to this error-->".mysqli_error($conn);
}



?>