<?php
$racine_path = '../';
$titre = "Artiste-Musée Histoire des Œuvres";
$pageariane = "Artiste";
/* header */
include($racine_path."view/header.php");
echo '<main>';
echo "<header> Mon fil d'ariane -> vous êtes sur la page $pageariane </header>";
$artistes = array(
    array("","nom", "prenom1", "bio"),
    array("","nom", "prenom2", "bio"),
    array("","nom", "prenom3", "bio")
);
echo '<a href="../control/ajouter.php?type=artiste" class="btn btn-success" style="margin: 20px;">Ajouter un Artiste</a>';
echo '<div class="cards-container">';
/* Boucle d'affichage */
for ($i = 0; $i < count($artistes); $i++) {
	$id=$i;
	$lien_image=$artistes[$i][0];
    $nom = $artistes[$id][1];
    $prenom = $artistes[$id][2];
    $bio = $artistes[$id][3];
    $modifier = $racine_path."control/modifier.php?id=".$id."&type=artiste";
    $sup = $racine_path."control/sup.php?id=".$id."&type=artiste";
    include($racine_path."view/artistes.php");
}
echo '</div>';
echo '</main>';

/* footer */
include($racine_path."view/footer.php");
?>


