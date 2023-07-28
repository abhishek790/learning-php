<?php

class Database
{
    // when no access modifier is used it uses default i.e. public, 
    //The var keyword in PHP is used to declare a property or variable of class which is public by default. The var keyword is same as public when declaring variables or property of a class.
    var $name = "Avsek";

    // by default methods are public
    function showName()
    {
        echo "<br> $this->name";
    }

}

$avsek = new Database();
echo $avsek->name;
$avsek->showName();



?>