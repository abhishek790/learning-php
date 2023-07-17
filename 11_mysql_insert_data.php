<?php
$servername = "localhost";
$name = "root";
$password= "";
$database = 'learn';

$conn = mysqli_connect($servername,$name,$password,$database);
if(!$conn){
    die("Sorry we failed to connect: ".mysqli_connect_error());
}else{
    echo "Connection was successful<br>";
}

$name = "nastya";
$destination = "russia";

$sql ="INSERT INTO `phptrip` ( `name`, `dest`) VALUES ( '$name' , '$destination' )";
$result = mysqli_query($conn,$sql);

if($result){
    echo "The query was successfully executed<br>";
}else{
    echo "The table was not  successfully executed because of this error".mysqli_error($conn);
}




?>