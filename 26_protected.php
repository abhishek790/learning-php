<?php
class Employee
{
    public $name;

    public $salary;

    public function __construct($name, $lang, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->describe();

    }

    protected function describe()
    {
        echo "Name of he programmer: $this->name <br>";

        echo "Salary of the programmer: $this->salary <br>";
    }
}

class Programmer extends Employee
{
    public $lang = "php";
    public function __construct($name, $lang, $salary)
    {
        $this->name = $name;
        $this->lang = $lang;
        $this->salary = $salary;
        $this->describe();
    }
}

$roy = new Employee("Roy", "java", 12000);
$avsek = new Programmer("Abhishek", "php", 15000);


?>