<?php
class Employee
{
    // class properties
    public $name;
    public $salary;
    /*
        //class methods
        //Constructor = It allows you to initialize objects. It is the code which is executed whenever a new object is instantiated
        function __construct()
        {
            echo "this is my contructor for employee";
        }
    */
    function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;

    }
}

$rohan = new Employee("ron", 150000);
$jon = new Employee('jon', 200000);

echo "salary of rohan is  $jon->salary ";
?>