<?php
function sumMarks($marksArr){
    $sum = 0;
    $numSub = count($marksArr);
    foreach($marksArr as $value){
        $sum += $value;
    }
    return $sum/$numSub;
}

$marks1 = [34,56,78,82,61,50];
$sumMarks1 = sumMarks($marks1);
echo $sumMarks1;

?>

<?php
$d= date("d j l");
echo "Todays date is $d"."\n";

?>