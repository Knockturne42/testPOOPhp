<?php
require 'class/personnage.php';

$perso1 = new myPerso($_GET['nom0'], intval($_GET['soin0']), intval($_GET['force0']), intval($_GET['armure0']), intval($_GET['vie0']), intval($_GET['attPhysique0']));
$perso2 = new myPerso($_GET['nom1'], intval($_GET['soin1']), intval($_GET['force1']), intval($_GET['armure1']), intval($_GET['vie1']), intval($_GET['attPhysique1']));
if (rand(0, 1))
{
	while ($perso1->enVie() && $perso2->enVie())
	{
		$type = rand(0, 2);
		if(!$type)
			$perso1->regen();
		elseif ($type == 1) 
			$perso1->attaque($perso2);
		else
			$perso1->attaquePhysique($perso2);
		$type = rand(0, 2);
		if(!$type)
			$perso2->regen();
		elseif ($type == 1) 
			$perso2->attaque($perso1);
		else
			$perso2->attaquePhysique($perso1);
	}
}
else
{
	while ($perso1->enVie() && $perso2->enVie())
	{
		$type = rand(0, 2);
		if(!$type)
			$perso2->regen();
		elseif ($type == 1) 
			$perso2->attaque($perso1);
		else
			$perso2->attaquePhysique($perso1);
		$type = rand(0, 2);
		if(!$type)
			$perso1->regen();
		elseif ($type == 1) 
			$perso1->attaque($perso2);
		else
			$perso1->attaquePhysique($perso2);
	}
}
?>