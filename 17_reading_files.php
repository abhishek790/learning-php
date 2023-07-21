<?php

    $text = readfile("myfile.txt");
    // text will also return number character read. to avoid printing that just use readfile() only , not store in variable and print it.
    echo $text."<br>";
    readfile("myfile.txt");
    echo "<br>";
    readfile("readfile.html");;
?>

<?php
//Returns a file pointer resource on success, or false on failure
$fptr = fopen("myfile.txt","r");
//echo var_dump($fptr);
if(!$fptr){
    die("Unable to open this file.Please enter a valid filename");
}
$content = fread($fptr,filesize("myfile.txt"));
echo $content;
// when a file is opened it uses resources in the server so to free up resources we have to close
fclose($fptr);
echo "<br>";

?>

<?php
$fptr = fopen("myfile.txt","r");
// reads file line by line, in a incremental way. One fgets print one line and increments to next line which will be printed by another fgets
//1st line
echo fgets($fptr);
// 2nd line
echo fgets($fptr);
// if no line left to print, it displays false
echo var_dump(fgets($fptr));
fclose($fptr);
echo "<br>";
?>

<?php
// reading a file character by character
$fptr = fopen("myfile.txt","r");
while($a = fgets($fptr)){
    echo $a;
}
fclose($fptr);
echo "<br>";
?>

<?php
//reading a file character by character
$fptr = fopen("myfile.txt","r");
while($b = fgetc($fptr)){
    echo $b;
}
fclose($fptr);
echo "<br>";
?>

<?php
// write a program which reads the content of a file until peroid . has been encountered
$fptr = fopen("myfile.txt",'r');
while($a= fgetc($fptr)){
    if($a == '.'){
        break;
    }else{
        echo $a;
    }
}
fclose($fptr);
?>