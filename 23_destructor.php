<?php
class Employee
{
    public $name;
    public $salary;

    function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    //destroy the object. it runs for it object created
    function __destruct()
    {
        echo "I am destructing $this->name <br>";
    }
}


$roy = new Employee("Roy", 15000);
$jon = new Employee("Jon", 20000);
$joshau = new Employee("Joshua", 5000);

echo "The salary of $roy->name is $roy->salary <br>";
echo "The salary of $jon->name is $jon->salary <br>";

?>