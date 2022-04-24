<?php

class Carre extends Form {

    private int $cote = 4;

    public function aire() {
        return pow($this->cote, 2);
    }

}