<?php
require 'class/personnage.php';
require 'class/formulaire.php';

$perso1 = new myPerso($_GET['nom0'], intval($_GET['soin0']), intval($_GET['force0']), intval($_GET['armure0']), intval($_GET['vie0']), intval($_GET['attPhysique0']));
$perso2 = new myPerso($_GET['nom1'], intval($_GET['soin1']), intval($_GET['force1']), intval($_GET['armure1']), intval($_GET['vie1']), intval($_GET['attPhysique1']));
if (rand(0, 1))
	while ($perso1->enVie() && $perso2->enVie())
		$perso1->randomAction($perso2);
else
	while ($perso1->enVie() && $perso2->enVie())
		$perso2->randomAction($perso1);
?>