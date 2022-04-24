<?php

class A {

    public function toto() {
        echo "toto de A";
    }
}

class B extends A {

    public function toto() {
        echo "toto de B";
    }
}

(new B)->toto();