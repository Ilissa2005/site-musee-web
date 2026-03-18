<?php
// On est dans control
$racine_path = "../";

// Variables de la page
$titre = "Profil - Musée Histoire des Œuvres";
$pageariane = "Profil";

// Données utilisateur en dur (pas de BDD)
$nom = "Ilissa";
$email = "ilissa@gmail.com";
$motdepasse = "123456";

// Affichage de la vue
include($racine_path."view/profil.php");
?>
