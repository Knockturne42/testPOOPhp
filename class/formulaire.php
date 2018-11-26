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
		echo '<li>vie perso '.$this->num.': '.$this->vie.'</li>';
		echo '<li>force perso '.$this->num.': '.$this->force.'</li>';
		echo '<li>nom perso '.$this->num.': '.$this->nom.'</li>';
		echo '<li>soin perso '.$this->num.': '.$this->soin.'</li>';
		echo '<li>armure perso '.$this->num.': '.$this->armure.'</li>';
		echo '<li>attPhysique perso '.$this->num.': '.$this->attPhysique.'</li>';
	}
}

?>