<?php

class Person {
    public $firstName;
    public $lastName;
    public $age;
    public static $totalCount;

    public function __construct($firstName,$lastName,$age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        static::$totalCount += 1;
    }

    public static function getTotalcount() {
        return static::$totalCount;
    }

    public function fullName() {
        return sprintf("%s %s", $this->firstName, $this->lastName);
    }

    public function getAge() {
        return $this->age * 365;
    }

    public function setAge($age) {
        if($age > 0) {
            $this->age = $age;
        }
    }
}
$honore = new Person("henry", "hennr", 45);
$toto = new Person("paum", "fress", 48);

echo Person::getTotalcount(). PHP_EOL;

?>