<?php

class Application {

    private $returnValeurEntiere;
    private $returnValeurEntiere2;
    private $returnValeurString;
    private $returnValeurString2;

    public function __construct(int $returnValeurEntiere, int $returnValeurEntiere2, string $returnValeurString, string $returnValeurString2)
    {
        $this->returnValeurEntiere = $returnValeurEntiere;
        $this->returnValeurEntiere2 = $returnValeurEntiere2;
        $this->returnValeurString = $returnValeurString;
        $this->returnValeurString2 = $returnValeurString2;
    }

    public function setreturnValeurEntiere($returnValeurEntiere) {

    }

    public function getreturnValeurEntiere() {
        return $this->returnValeurEntiere;
    }

    public function setreturnValeurEntiere2($returnValeurEntiere) {

    }

    public function getreturnValeurEntiere2() {
        return $this->returnValeurEntiere2;
    }

    public function setreturnValeurString($returnValeurString) {

    }

    public function getreturnValeurString() {
        return $this->returnValeurString;
    }

    public function setreturnValeurString2($returnValeurString2) {

    }

    public function getreturnValeurString2() {
        return $this->returnValeurString2;
    }

    public static function testDeFunction(int $exemple, int $exemple2, int $exemple3) {
        $resultEx = ($exemple+$exemple2+$exemple3);
        return $resultEx;
    }

}

$testDeObjet = new Application(54, 64, "hanawa", "hanawa");
var_dump($testDeObjet);

echo Application::testDeFunction(45,45,45);