<?php
// 1) Chemin racine
$racine_path = "../";

// 2) Variables de la page
$pageariane = "Fiche œuvre";

// 3) Données en dur
$liste_oeuvres = array(
	1 => array(
		"titre" => "Le Penseur",
		"image" => $racine_path."images/oeuvre1.jpg",
		"description" => "Le Penseur est l’une des sculptures les plus connues d’Auguste Rodin.

Cette œuvre représente un homme assis, le corps tendu, la main sous le menton, comme absorbé par une réflexion profonde. Elle évoque à la fois la méditation, le doute et la force intérieure.

Souvent interprété comme un symbole de la pensée humaine, Le Penseur est devenu une image universelle de la réflexion."
	),
	2 => array(
		"titre" => "La Victoire",
		"image" => $racine_path."images/oeuvre2.jpg",
		"description" => "La Victoire est une œuvre qui symbolise la réussite après l’effort.

À travers la posture et l’élan du personnage, cette création évoque l’énergie, le courage et l’espoir. Elle rappelle que la victoire n’est pas seulement un résultat, mais aussi une attitude : se relever, continuer et avancer.

Cette œuvre est souvent appréciée pour son message positif et inspirant."
	),
	3 => array(
		"titre" => "L’Élan",
		"image" => $racine_path."images/oeuvre3.jpg",
		"description" => "L’Élan est une œuvre moderne centrée sur le mouvement et la progression.

Les formes et la composition donnent une impression de dynamisme, comme si la matière était en train de se transformer. L’œuvre suggère une montée, une poussée vers l’avant, une énergie qui ne s’arrête pas.

Elle représente bien l’idée d’évolution : avancer, créer et se renouveler."
	)
);

// 4) Récupérer l'id
$id = 1;
if (isset($_GET["id"])) {
	$id = (int)$_GET["id"];
}

// 5) Choisir l'œuvre
if (isset($liste_oeuvres[$id])) {
	$oeuvre = $liste_oeuvres[$id];
} else {
	$oeuvre = $liste_oeuvres[1];
}

// Variables utilisées par la vue 
$titre_oeuvre = $oeuvre["titre"];
$image_oeuvre = $oeuvre["image"];
$description_oeuvre = nl2br($oeuvre["description"]);

// Titre affiché dans le header 
$titre = $titre_oeuvre;

// 6) Affichage 
include($racine_path."view/header.php");

echo "<main class='p-3'>";
echo "<header>Vous êtes sur la page ".$pageariane."</header>";

include($racine_path."view/ficheoeuvre.php");

echo "</main>";

include($racine_path."view/footer.php");
?>