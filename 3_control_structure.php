<?php
$age = 14;
//if-else
if($age>18){
    echo "you can drink alcohol and eat meat"."\n";
}elseif($age>13){
    echo "you cannot drink alcohol but you can eat meat"."\n";
}else{
    echo "you can drink juice only"."\n";
}
//switch 

$day = 'monday';

switch($day){
    case 'sunday':
        echo "learn java"."\n";
        break;
    case 'monday':
        echo "learn database"."\n";
        break;
    case 'tuesday':
        echo "learn c#"."\n";
        break;
    default :
        echo 'not a valid week'."\n";
}

//while
$number = 1;
while($number<=10){
    echo $number."\n";
    $number++;
}

for($i=0;$i<=7;$i++){
    echo "the value of i is $i"."\n";
}
$num =1;
do{
  echo "the value of num is $num"."\n";
  $num++;
}while($num<=7);

//foreach
$info = ['roy','jon','joshua','sam','tyler'];
for ($i=0;$i<count($info);$i++){
    echo $info[$i]."\n";
}

foreach($info as $name){
    echo $name."\n";
}


?>


