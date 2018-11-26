<?php
require 'class/personnage.php';

function formCreate()
{
	$formu[0] = new formulaire(0);
	$formu[1] = new formulaire(1);

	$formu[0]->addI();
	$formu[1]->addI();

	return ($formu);
}


$myForm = formCreate();

echo '<form action="./create.php" method="get" name="monForm">';
echo $myForm[0]->echoForm().$myForm[1]->echoForm().'<input type="submit" value="creer"></form>';
?>