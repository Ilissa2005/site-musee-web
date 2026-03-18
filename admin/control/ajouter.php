<?php
$racine_path = '../';
$titre="Ajouter";
include($racine_path."view/header.php");
echo '<main>';
$objet =$_GET["type"];
if ($objet === "oeuvre") {
    include($racine_path."view/ajouterOeuvreView.php");
}
elseif ($objet === "artiste") {
    include($racine_path."view/ajouterArtisteView.php");
}
elseif ($objet === "user") {
    include($racine_path."view/ajouterUserView.php");}
else {
	echo"<h2>type inconnu</h2>";
}
echo '</main>';
include($racine_path."view/footer.php");
?>

