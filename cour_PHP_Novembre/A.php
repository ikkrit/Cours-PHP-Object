<?php

class A {

    public function toto() {
        echo "Je suis la methode toto appeler depuis la class A.";
    }

}

class B extends A {

    public function tata() {
        parent::toto();
        echo "Je suis la methode tata appeler depuis la class B.";
    }

}

(new B)->tata();