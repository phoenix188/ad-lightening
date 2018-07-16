<?php

if (isset($_POST['submit']))
	{
		$prenom = $_POST['Prénom'];
		$nom = $_POST['Nom'];
		$tel = $_POST['Téléphone'];
		$message = $_POST['Message'];

		$mailTo = "dylan.seo.paris@gmail.com";
		$headers = 'From: dylan.seo.paris@gmail.com' . phpversion();
		$txt = "You have received mail from us";

		mail($mailTo, $message, $prenom, $nom, $tel, $headers);

		
    }
    	$test = "nikoumouk le php";
		echo "$test";







  ?>