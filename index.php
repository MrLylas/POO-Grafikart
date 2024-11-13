<?php

require 'Personnage.php';

$merlin = new Personnage("Merlin");
$harry = new Personnage("Harry");

$merlin->setNom('Marlin');

var_dump($merlin->getNom());
var_dump($merlin->getVie());
var_dump($merlin->getAtk());

var_dump($harry->getNom());
var_dump($harry->getVie());
var_dump($harry->getAtk());

