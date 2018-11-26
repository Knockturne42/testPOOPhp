<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="index.css">
</head>
<body>
	<main>
		<?php
		require 'class/personnage.php';
		require 'class/formulaire.php';

		function formCreate()
		{
			$formu[0] = new formulaire(0);
			$formu[1] = new formulaire(1);

			$formu[0]->addI();
			$formu[1]->addI();

			return ($formu);
		}


		$myForm = formCreate();

		echo '<form action="./create.php" method="get" name="monForm"><ul>';
		echo $myForm[0]->echoForm().$myForm[1]->echoForm().'<li><input type="submit" value="creer"></li></ul></form>';
		?>
	</main>
</body>
</html>