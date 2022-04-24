<?php

use Acme\{Person, Teams\Team, League};

echo random_number() . PHP_EOL;

new Song;

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