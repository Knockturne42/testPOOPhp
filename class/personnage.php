<?php
class formulaire {
	public $num = 0;
	public $vie = '<input type="text" value="" name="vie';
	public $force = '<input type="text" value="" name="force';
	public $nom = '<input type="text" value="" name="nom';
	public $soin = '<input type="text" value="" name="soin';
	public $armure = '<input type="text" value="" name="armure';
	public $attPhysique = '<input type="text" value="" name="attPhysique';

	public function __construct($i)
	{
		$this->num = $i;
	}

	public function addI()
	{
		$this->vie .= $this->num.'">';
		$this->force .= $this->num.'">';
		$this->nom .= $this->num.'">';
		$this->soin .= $this->num.'">';
		$this->armure .= $this->num.'">';
		$this->attPhysique .= $this->num.'">';
	}

	public function echoForm()
	{
		echo 'vie perso '.$this->num.': '.$this->vie;
		echo 'force perso '.$this->num.': '.$this->force;
		echo 'nom perso '.$this->num.': '.$this->nom;
		echo 'soin perso '.$this->num.': '.$this->soin;
		echo 'armure perso '.$this->num.': '.$this->armure;
		echo 'attPhysique perso '.$this->num.': '.$this->attPhysique;
	}
}

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
}
?>