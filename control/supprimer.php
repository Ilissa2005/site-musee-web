<?php
$racine_path = "../";
$titre = "Supprimer - Musée Histoire des Œuvres";
$pageariane = "Supprimer";

include($racine_path."view/header.php");

echo "<main class='container mt-4'>";
echo "<header>Vous êtes sur la page ".$pageariane."</header>";

include($racine_path."view/supprimer.php");

echo "</main>";

include($racine_path."view/footer.php");
?>