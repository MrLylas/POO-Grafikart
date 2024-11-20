<?php

//Fichiers requis :

require 'Personnage.php';
require 'Form.php';
require 'Text.php';
require 'Archer.php';

//Personnages :

$merlin = new Personnage("Merlin");
$harry = new Personnage("Harry");
$legolas = new Archer('Legolas');

//Actions :

$merlin->setNom('Marlin');
$merlin->regenerer();
$legolas->attaque($harry);

//var_dump :

var_dump($merlin);
var_dump($harry);
var_dump($legolas);


?>

