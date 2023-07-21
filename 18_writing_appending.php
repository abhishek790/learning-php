<?php
    // when we open a file on write mode, if the file does not exist it will create a file and write, if the file already exists then it will rewrite the file so originally text will be lost
    $fptr = fopen("myfile.txt2",'w');
    fwrite($fptr, "Java is really great programming language.I will definitely learn java and hopefully work on java some day in future but right now I will focous on php\n");
    fwrite($fptr,"lets test this one\n");
    fwrite($fptr,"this is another line\n");
    fclose($fptr);

    $fptr = fopen("myfile.txt2",'a');
    // writes this line at the end of the line
    fwrite($fptr,"This is being appended to the file\n");
    fclose($fptr );


?>