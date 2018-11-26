<?php

class myPerso{
	public $vie = 100;
	public $force = 20;
	public $nom;
	public $soin;
	public $armure = 15;
	public $attPhysique = 25;

	public function __construct($nom, $soin, $force, $armure, $vie, $attPhysique)
	{
		$this->force = $force;
		$this->vie = $vie;
		$this->nom = $nom;
		$this->armure = $armure;
		$this->attPhysique = $attPhysique;
		$this->soin = $soin;
	}

	public function regen($reg = 0)
	{
		if (!$reg)
		{
			$reg = $this->soin;
		}
		$this->vie += $reg;
		echo " Apres utilisation de regen() ".$this->nom." a maintenant ".$this->vie." HP";
		echo "<br>";
	}

	public function decrire()
	{
		echo "Je me prenomme ".$this->nom.", ma vie est de ".$this->vie." HP. Ma force quand a elle est de ".$this->force.". J'ai une capacite nommee regen() ";
		$this->regen().".";
		echo "<br>";
	}

	public function attaque(myPerso $enemy)
	{
		$enemy->vie -= $this->force;
		echo $this->nom." attaque ".$enemy->nom." avec une attaque magique,  ";
		echo $enemy->nom." perd ".$this->force." HP et a maintenant : ".$enemy->vie." HP";
		echo "<br>";
		if ($enemy->enVie())
			echo $enemy->nom." est vivant<br>";
		else
			echo $enemy->nom." est mort<br>";
	}

	public function enVie()
	{
		if ($this->vie > 0)
			return 1;
		return 0;
	}

	public function attaquePhysique(myPerso $enemy)
	{
			if ($this->attPhysique > $enemy->armure)
			{
				$enemy->vie -= $this->attPhysique - $enemy->armure;
				echo $this->nom." attaque ".$enemy->nom." avec une attaque physique,  ";
				echo $enemy->nom." perd ".($this->attPhysique - $enemy->armure)." HP et a maintenant : ".$enemy->vie." HP";
				echo "<br>";
			}
			if ($enemy->enVie())
				echo $enemy->nom." est vivant<br>";
			else
				echo $enemy->nom." est mort<br>";
	}

	public function randomAction($enemy)
	{
		$type = rand(0, 2);
		if(!$type)
			$this->regen();
		elseif ($type == 1) 
			$this->attaque($enemy);
		else
			$this->attaquePhysique($enemy);
		$type = rand(0, 2);
		if(!$type)
			$enemy->regen();
		elseif ($type == 1) 
			$enemy->attaque($this);
		else
			$enemy->attaquePhysique($this);
	}
}
?>