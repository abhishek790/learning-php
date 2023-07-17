<?php
$a = 98;
$b = 9;
function printValue(){
    global $a,$b;
    echo "the value of a and b variable is $a and $b"."\n";
}
printValue();
// PRINTS ALL THE GLOBAL VARIABLE IN PHP. $GLOBALS stores all the global variable
echo var_dump($GLOBALS["a"]);


?>