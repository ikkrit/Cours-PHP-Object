<?php 

class Triangle extends Form {

    private int $base = 4;
    private int $hauteur = 2;

    public function aire() {
        return ($this->base * $this->hauteur) /2;
    }
}