<?php

class Car extends Transport
{
    private $body_type = null;
    protected $speed_val = 'km/h';

    public function __construct($speed, $people_cnt, $weight, $body_type)
    {
        parent::__construct($speed, $people_cnt, $weight);
        $this->body_type = $body_type;
    }

    public function getFormatSpeed()
    {
        return "Car speed ".parent::getFormatSpeed();
    }

    public function __get($name)
    {
        // TODO: Implement __get() method.
        if(property_exists(__CLASS__,$name)) {
            return '<br><b>'.$name."</b><br>";
        } else {
            return 'Error';
        }
    }

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
//        $this->$name = $value;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.

        return "This is Car ".$this->speed." ".$this->speed_val;
    }

    public function __invoke($a, $b)
    {
        // TODO: Implement __invoke() method.
        echo "Sum = ".$a + $b.'<br>';
    }
}