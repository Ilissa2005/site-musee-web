<?php
// 1) Chemin racine
$racine_path = "../";

// 2) Variables de la page
$pageariane = "Fiche artiste";

// 3) Données en dur
$liste_artistes = array(
	1 => array(
		"nom" => "Auguste Rodin",
		"image" => $racine_path."images/artiste1.jpg",
		"bio" => "Auguste Rodin (1840-1917) est un sculpteur français considéré comme l’un des pionniers de la sculpture moderne.

Son travail se distingue par un réalisme puissant et une capacité à exprimer les émotions humaines à travers le mouvement et la matière. Contrairement aux traditions académiques, Rodin met l’accent sur l’expression et la force du geste plutôt que sur la perfection formelle.

Parmi ses œuvres les plus célèbres figurent Le Penseur, Le Baiser et La Porte de l’Enfer. Son influence sur la sculpture moderne est immense et durable."
	),
	2 => array(
		"nom" => "Camille Claudel",
		"image" => $racine_path."images/artiste2.jpg",
		"bio" => "Camille Claudel (1864-1943) est une sculptrice française reconnue pour son talent et la grande sensibilité de son œuvre.

Élève et collaboratrice d’Auguste Rodin, elle développe un style personnel marqué par le mouvement, la passion et l’émotion. Ses sculptures explorent souvent les thèmes de l’amour, du destin et de la solitude.

Parmi ses œuvres les plus connues figurent La Valse et L’Âge mûr. Longtemps méconnue, elle est aujourd’hui reconnue comme une artiste majeure de la sculpture française."
	),
	3 => array(
		"nom" => "Pablo Picasso",
		"image" => $racine_path."images/artiste3.jpg",
		"bio" => "Pablo Picasso (1881-1973) est un peintre, dessinateur et sculpteur espagnol, considéré comme l’un des artistes les plus influents du XXe siècle.

Il est surtout connu pour avoir cofondé le cubisme avec Georges Braque, un mouvement révolutionnaire qui a transformé la représentation de la réalité en peinture.

Ses œuvres les plus célèbres incluent Les Demoiselles d’Avignon et Guernica, tableau engagé contre la guerre. Picasso a produit des milliers d’œuvres et marqué profondément l’histoire de l’art moderne."
	)
);

// 4) Récupérer l'id
$id = 1;
if (isset($_GET["id"])) {
	$id = (int)$_GET["id"];
}

// 5) Choisir l'artiste
if (isset($liste_artistes[$id])) {
	$artiste = $liste_artistes[$id];
} else {
	$artiste = $liste_artistes[1];
}

// Variables utilisées par la vue 
$nom_artiste = $artiste["nom"];
$image_artiste = $artiste["image"];
$description_artiste = nl2br($artiste["bio"]);

// Titre affiché dans le header 
$titre = $nom_artiste;

// 6) Affichage 
include($racine_path."view/header.php");

echo "<main class='p-3'>";
echo "<header>Vous êtes sur la page ".$pageariane."</header>";

include($racine_path."view/ficheartiste.php");

echo "</main>";

include($racine_path."view/footer.php");
?>