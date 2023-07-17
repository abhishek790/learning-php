<?php
$name = "Harry is a good boy ";
echo $name."\n";
// . is to contcatinate 2 strings
echo "The length of my string is ". strlen($name)."\n";
// str_word_count gives the number of word in string
echo str_word_count($name)."\n";
//strev reverses a string
echo strrev($name)."\n";
// prints the starting position of "is" in a string , it includes white space
echo strpos($name, "is")."\n";
// replace harry with roy in $name variable
echo str_replace("Harry","Roy",$name);
// repeats name 12 times
echo str_repeat($name ,2)."\n";
//left trim
echo ltrim("    this is a good boy")."\n";
//right trim
echo rtrim("this is a good boy       ")."\n";

$a = true;
$b = false;
echo var_dump($a&& !$b);

?>