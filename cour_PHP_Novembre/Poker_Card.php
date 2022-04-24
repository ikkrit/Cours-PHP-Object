<?php

class Poker {

    private string $color;
    private string $figure;
    private int $value;
    public static $compt;

    public function __construct($color, $figure, $value) {

        $this->color = $color;
        $this->figure = $figure;
        $this->value = $value;
        static::$compt += 1;

    }

    public function setColor($color) {
            
    }

    public function getColor() {
        return $this->color;
    }

    public function setFigure($figure) {

    }

    public function getFigure() {
        return $this->figure;
    }

    public function setValue($value) {

    }

    public function getValue() {
        return $this->value;
    }

}

$newCard = new Poker("Pique", "Dame", 10);
var_dump($newCard);