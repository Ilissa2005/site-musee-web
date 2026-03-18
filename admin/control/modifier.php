<?php
$racine_path = '../';
$titre="modifier";
include($racine_path."view/header.php");
echo '<main>';
$oeuvres = array(
    array("", "Oeuvre 1", "Peinture", "Artiste 1", "Description 1", 2000),
    array("", "Oeuvre 2", "Sculpture", "Artiste 2", "Description 2", 2005),
    array("", "Oeuvre 3", "Photo", "Artiste 3", "Description 3", 2010)
);
$artistes = array(
    array("nom", "prenom1", "bio"),
    array("nom", "prenom2", "bio"),
    array("nom", "prenom3", "bio")
);
$users = array(array("","haf", "blablabla@gmail.com","****"),
    array("","nom", "email","****"),
    array("","nom", "email","****"),
    array("","nom", "email","****")
);
/* 1. recuperer l id envoye dans url */
$id = $_GET["id"];
$objet =$_GET["type"];
if($objet==="oeuvre"){
	$lien_image = $oeuvres[$id][0];
	$nom_oeuvre = $oeuvres[$id][1];
	$type = $oeuvres[$id][2];
	$artiste = $oeuvres[$id][3];
	$description = $oeuvres[$id][4];
	$annee = $oeuvres[$id][5];
	include($racine_path."view/modifierOeuvreView.php");
}
elseif($objet==="artiste"){
        $nom = $artistes[$id][0];
        $prenom = $artistes[$id][1];
        $bio = $artistes[$id][2];
	include($racine_path."view/modifierArtisteView.php");
        }
elseif($objet==="user"){
	$lien=$users[$id][0];
	$nom=$users[$id][1];
	$email=$users[$id][2];
	$mdp=$users[$id][3];
	 include($racine_path."view/modifierUserView.php");
}
echo '</main>';
include($racine_path."view/footer.php");
?>

