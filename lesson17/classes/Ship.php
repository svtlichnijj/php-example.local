<?php

final class Ship extends Transport
{
    private $water = null;

    protected $speed_val = 'knot';

    public function __construct($speed, $people_cnt, $weight, $water)
    {
        parent::__construct($speed, $people_cnt, $weight);
        $this->water = $water;
    }
}