<?php
// php keyword is not case sensitive
// variables are case sensitive and you can use alphanumeric characters and underscore
echo "This is tutorial";
$name = "harry";
$income = 200.8;


echo "This guy is $name and his income is $$income.<br>";
echo "$name is the real gangster <br>";

?>

<?php
/*php data types
1.String
2.Integer
3.Float
4.Boolean
5.Object
6.Array
7.Null

*/
$name = "harry";
echo "$name has $income income";

// Integer
$income = 455;
$debts = -655;
echo "<br>";
echo $income;
echo "<br>";
echo $debts;
echo "<br>"; 

//float 
$income = 344.33;
$debt = -34.335;
echo $income,$debt;
echo "<br>"; 

$x =true;
$is_friend = false;
//var dump prints variable value and it's type

echo var_dump($x);
echo "<br>"; 
echo var_dump($is_friend);

//Array
$friends = array("roy","larry","sunny","john");
echo var_dump($friends);
echo "<br>"; 
echo $friends[0];
echo "<br>"; 
echo $friends[1];
// null
$name = null;
echo $name;

?>