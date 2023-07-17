<?php
echo "Welcome to the stage where we are ready to get connected to a database";
echo "<br>"; 
/*ways to connect to a MySQL Database
1. MySQLi extension => can be done using procedural or object oriented, it works with mysql only
2. PDO=>php data object, it works with multiple databases
*/
// CONNECTING TO THE DATABASE,
// it needs three things mentioned below
// since we are using local database values are same all the time but will be different if remote db is used.
$servername = "localhost";
$username = "root";
$password = "";

//CREATING A CONNECTION OBJECT
$conn = mysqli_connect($servername,$username,$password);


if(!$conn){
    // die exits the current script
    die("Sorry we failed to connect: ". mysqli_connect_error());
}else{
    echo "Connection was successful";
}
echo "<br>";

?>