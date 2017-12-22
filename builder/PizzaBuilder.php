<?php

class PizzaBuilder
{
    public $size;
    public $cheese;
    public $pepperoni;
    public $bacon;

    public function __construct()
    {
        $this->size = $size;
    }

    public function cheese(bool $present)
    {
        $this->cheese = $present;
        return $this;
    }

    public function pepperoni(bool $present)
    {
        $this->pepperoni = $present;
        return $this;
    }

    public function bacon(bool $present)
    {
        $this->bacon = $present;
        return $this;
    }

    public function build()
    {
        return $this;
    }
}
