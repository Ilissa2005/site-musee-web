<?php
$racine_path = '../';
$titre = "Oeuvre - Musée Histoire des Œuvres";
$pageariane = "Les Oeuvres";
/* header */
include($racine_path."view/header.php");
echo '<main>';
echo "<header> Mon fil d'ariane -> vous êtes sur la page $pageariane </header>";
$oeuvres = array(
    array("", "Oeuvre 1", "Peinture", "Artiste 1", "Description 1", 2000),
    array("", "Oeuvre 2", "Sculpture", "Artiste 2", "Description 2", 2005),
    array("", "Oeuvre 3", "Photo", "Artiste 3", "Description 3", 2010)
);
echo '<a href="../control/ajouter.php?type=oeuvre" class="btn btn-success" style="margin: 20px;">Ajouter une œuvre</a>';
echo '<div class="cards-container">';
/* Boucle d'affichage */
for ($i = 0; $i < count($oeuvres); $i++) {

    $id = $i;
    $lien_image = $oeuvres[$i][0];
    $nom_oeuvre = $oeuvres[$i][1];
    $type_o = $oeuvres[$i][2];
    $artiste = $oeuvres[$i][3];
    $description = $oeuvres[$i][4];
    $annee = $oeuvres[$i][5];

    $modifier = $racine_path."control/modifier.php?id=".$id."&type=oeuvre";
    $sup = $racine_path."control/sup.php?id=".$id."&type=oeuvre";

    include($racine_path."view/oeuvres.php");
}
echo '</div>';
echo '</main>';

/* footer */
include($racine_path."view/footer.php");
?>

