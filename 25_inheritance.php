<?php

class Employee
{
    public $name = "avsek";
    private $salary = 12000;
    protected $grade = 3;

    function setSalary($salary)
    {
        $this->salary = $salary;
    }

    function getSalary()
    {
        echo "The salary of employee  $this->name is $this->salary<br>";
    }
    function showName()
    {
        echo "The name of this employee $this->name <br>";
    }

}

class Programmer extends Employee
{
    private $language = "Java";
    function changeLanguage($lang)
    {
        echo $this->grade . "<br>";
        return $this->language = $lang;
    }

}

$avsek = new Employee();
$avsek->name = "Abhishek";
$avsek->setSalary((16000));
echo $avsek->getSalary();
$avsek->showName();

$roy = new Employee();
$roy->name = "Roy";
$roy->setSalary((14000));
echo $roy->getSalary();
$roy->showName();

$joy = new Programmer();
$joy->name = "Joy";
$joy->setSalary((10000));
echo $joy->getSalary();
$joy->showName();
echo $joy->changeLanguage("c#") . "<br>";
?>