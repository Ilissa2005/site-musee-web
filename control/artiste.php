<?php
	// 1) Chemin racine (on est dans control)
	$racine_path = "../";

	// 2) Variables de la page
	$titre = "Artistes - Musée Histoire des Œuvres";
	$pageariane = "Artistes";

	/* view */ include($racine_path."view/header.php");
	

	echo "<main>";
	echo "<header> Vous êtes sur la page ".$pageariane." </header>";

	echo "<div class='container'>";
	echo "<div class='row'>";

	// 3) Données 
	$artistes = array(
		array(
			"id" => 1,
			"nom" => "Auguste Rodin",
			"bio_courte" => "Sculpteur français, connu pour Le Penseur.",
			"image" => $racine_path."images/artiste1.jpg"
		),
		array(
			"id" => 2,
			"nom" => "Camille Claudel",
			"bio_courte" => "Sculptrice française, œuvres très expressives.",
			"image" => $racine_path."images/artiste2.jpg"
		),
		array(
			"id" => 3,
			"nom" => "Pablo Picasso",
			"bio_courte" => "Artiste espagnol et fondateur du cubisme.",
			"image" => $racine_path."images/artiste3.jpg"
		)
	);

	// 4) Une carte
	foreach ($artistes as $artiste) {

		$id = $artiste["id"];
		$nom_artiste = $artiste["nom"];
		$description_courte_artiste = $artiste["bio_courte"];
		$lien_image_artiste = $artiste["image"];
		$lien_fiche_artiste = $racine_path."control/ficheartiste.php?id=".$id;

		/* view */ include($racine_path."view/artiste.php");
	}

	echo "</div>";
	echo "</div>";
	echo "</main>";

	/* view */ include($racine_path."view/footer.php");
?>