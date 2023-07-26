<?php

class Player
{ //properties
    public $name;
    public $speed = 5;
    public $running = false;

    //methods
    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }

    function run()
    {
        $this->running = true;
    }
    function stop_run()
    {
        $this->running = false;
    }
}
echo "Lets understand oops <br>";
$player1 = new Player();
echo $player1->speed;
$player1->set_name("Roy");
echo $player1->get_name();

?>