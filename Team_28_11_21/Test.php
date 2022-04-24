<?php


class Person {

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function favorite(Team $team) {
        $team->favorite();
    }
}

class Team {

    private $name;
    private $nombreFan;

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

class League {

    private $name;
    private $teams;

    public function __construct($name)
    {
        $this->name = $name;
        $this->teams = [];

    }

    public function addTeam(Team $team) {
        $this->teams[] = $team;
    }

    public function getTeamCount() {
        return count($this->teams);
    }
}

$honore = new Person("Honore Hounwanou");
$pierre = new Person("Pierre Dubuc");

$barcelona = new Team("Barcelona");
$realMadrid = new Team("Real de Madrid");

$honore->favorite($realMadrid);
$pierre->favorite($realMadrid);
$pierre->favorite($barcelona);

echo $barcelona->getName() . " a ". $barcelona->getNombreFan() . " fans " . PHP_EOL;
echo $realMadrid->getName() . " a " . $realMadrid->getNombreFan() . " fans " . PHP_EOL;

$liga = new League("Liga");
$liga->addTeam($barcelona);
$liga->addTeam($realMadrid);

echo $liga->getTeamCount() . " equipes";