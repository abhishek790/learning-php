<?php
$servername = "localhost";
$name = "root";
$password = "";
$database = "learn";

$conn = mysqli_connect($servername,$name,$password,$database);

if(!$conn){
    die("Sorry we failed to connect".mysqli_connect_error());
}else{
    echo "Connection was successfull<br>";
}
$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn,$sql);
//find the number of rows
$num =  mysqli_num_rows($result);
echo $num;
echo "record found in the database <br>";

//display the rows returned by the sql query
if($num>0){
    //mysqli_fetch_assoc() will give associative array of rows in db one by one each time we call this function 
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row)."<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row)."<br>";
     
    while($row = mysqli_fetch_assoc($result) ){
        echo $row['sno']. " Hello ". $row['name']." Welcome to ".$row['dest']."<br>";
        
    }

}
?>