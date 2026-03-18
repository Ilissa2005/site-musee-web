<?php
	// 1) Chemin racine
	$racine_path = "../";

	// 2) Variables de la page
	$titre = "Œuvres - Musée Histoire des Œuvres";
	$pageariane = "Œuvres";

	/* view */ include($racine_path."view/header.php");
	

	echo "<main>";
	echo "<header> Vous êtes sur la page ".$pageariane." </header>";

	echo "<div class='container'>";
	echo "<div class='row'>";

	// 3) Données en dur
	$oeuvres = array(
		array(
			"id" => 1,
			"titre" => "Le Penseur",
			"desc_courte" => "Sculpture en bronze, très connue.",
			"image" => $racine_path."images/oeuvre1.jpg"
		),
		array(
			"id" => 2,
			"titre" => "La Victoire",
			"desc_courte" => "Une œuvre qui symbolise le courage.",
			"image" => $racine_path."images/oeuvre2.jpg"
		),
		array(
			"id" => 3,
			"titre" => "La Nuit étoilée",
			"desc_courte" => "Un célèbre tableau de Vincent van Gogh peint en 1889.",
			"image" => $racine_path."images/oeuvre3.jpg"
		)
	);

	// 4) Boucle
	foreach ($oeuvres as $o) {

		$id = $o["id"];
		$titre_oeuvre = $o["titre"];
		$description_courte_oeuvre = $o["desc_courte"];
		$lien_image_oeuvre = $o["image"];
		$lien_fiche_oeuvre = $racine_path."control/ficheoeuvre.php?id=".$id;

		/* view */ include($racine_path."view/oeuvre.php");
	}

	echo "</div>";
	echo "</div>";
	echo "</main>";

	/* view */ include($racine_path."view/footer.php");
?>