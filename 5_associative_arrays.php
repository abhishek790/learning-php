<?php
echo "welcome to associative arrays in php"."\n";

$favCol = array('dragon'=>'red','whale'=>'blue','tiger'=>'orange',8=>'this');

echo $favCol['dragon']."\n";
echo $favCol['whale']."\n";
echo $favCol[8]."\n";

foreach($favCol as $key => $value ){
    echo "favourite color of $key is $value"."\n";
}
foreach($favCol as $key){
    echo $key."\n";
}

?>

<?php
$multiDim = array(
    array(2,5,7,8),
    array(1,2,3,1),
    array(4,5,0,1),
);

echo var_dump($multiDim)."\n";

for($i=0;$i<count($multiDim);$i++){
    for($j=0;$j<count($multiDim[$i]);$j++){
        echo $multiDim[$i][$j];
        echo " ";
    }
}


?>