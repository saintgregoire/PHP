<?php
require "Character.php";

$perso = new Character("Ragnar");
$MyWeapon = new Weapon("Sword", 10);
$perso->setWeapon($MyWeapon);


echo "My name is {$perso->getName()}, my weapon is {$perso->getWeapon()->getName()} and damage of my weapon is {$perso->getWeapon()->getDamages()}. {$perso->fight()}. ";

?>