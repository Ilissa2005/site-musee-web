<?php
	$racine_path = "../";
	$titre = "Contact - Musée Histoire des Œuvres";
	$pageariane = "Contact";

	$envoye = false;

	if (isset($_POST["nom"]) && isset($_POST["email"])) {
		$envoye = true;
	}

	include($racine_path."view/header.php");

	echo "<main class='p-3'>";
	echo "<header>Vous êtes sur la page ".$pageariane."</header>";

	
	if ($envoye == true) {
		echo "<p class='message-ok'>Message envoyé avec succès.</p>";
	}

	
	include($racine_path."view/contact.php");

	echo "</main>";

	include($racine_path."view/footer.php");
?>