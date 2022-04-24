<?php

class Cercle {

    private int $rayon = 3;

    public function aire() {
        return pi() * $this->rayon * $this->rayon;
    }

}