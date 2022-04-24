<?php

namespace Acme\Teams;

class Team {

    private $name;
    private $nombreFan = 0;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function getNombreFan() {
        return $this->nombreFan;
    }

    public function favorite() {
        $this->nombreFan += 1;
    }
}