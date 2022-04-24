<?php 

class A {

    private $attribut1 = 8 ;

    public function methode1() {
        echo self::$attribut1;
    }
}

class B extends A {

    public function methode1() {
        parent::methode1();
    }
}

(new B)->methode1();