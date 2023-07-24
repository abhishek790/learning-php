<?php
//setting cookie
// cookies is a tag which is used to identify users
// cookie is small info,php will save it in users computer to idendtify users
// session data are more sensitive and are safely stored in the server
echo "Welcome to the world of cookies";
// time() same as date.now in js
//key,value,expiration time, which domain can access the file "/" means it is availabe througout the website
setcookie("category","Books", time() + 86400, "/");
echo "<br>the cookie is set";

?>


<?php
// getting cookie
// $_cookie is super global
$cat = $_COOKIE['category'];
echo "<br> here is the list of all the $cat";
?>