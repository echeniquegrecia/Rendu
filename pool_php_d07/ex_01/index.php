<?php
include_once ("Character.php");

$perso = new Character("Jean-Luc");

echo $perso->getName() ."\n";
echo $perso->getLife() ."\n";
echo $perso->getAgility() ."\n";
echo $perso->getStrength() ."\n";
echo $perso->getWit() ."\n";
echo $perso->getClasse() ."\n";

?>