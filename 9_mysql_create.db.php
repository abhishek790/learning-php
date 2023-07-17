<?php
$servername = "localhost";
$username = "root";
$password = "";
// create a connection
$conn = mysqli_connect($servername,$username,$password);

//die if connection is not successful
if(!$conn){
    die("Sorry we failed to connect".mysqli_connect_error());
}else{
    echo "Connnection was successful";
    echo "<br>";
}


//create a db
$sql = "CREATE DATABASE dbRoy";
//executes query
// this function takes 2 arguments i.e connection and query
// return true if succsess and false if not
$result =  mysqli_query($conn,$sql);

//check for db creation success
if($result){
    echo "The db was created successfully!";
    echo "<br>";

}else{
    echo "The db was not created successfully".mysqli_error($conn);
    echo "<br>";
}

echo "The result is";
echo var_dump($result);
echo "<br>";



?>