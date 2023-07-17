<?php
$servername = "localhost";
$name = "root";
$password = "";
$database = "learn";

$conn = mysqli_connect($servername,$name,$password,$database);

if(!$conn){
    die("Sorry we failed to connect".mysqli_connect_error());
}else{
    echo "Connnection was successful";
    echo "<br>";
}
//create a table in the db
$sql = "CREATE TABLE `phptrip` (`sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`)) ";

$result = mysqli_query($conn,$sql);
if($result){
    echo "The table was created successfully!<br>";
}else{
    echo "The table was not created successfully because of this error -->".mysqli_connect(error);
}

?>
