<?php
$racine_path = "../";
$titre = "Modifier - Musée Histoire des Œuvres";
$pageariane = "Modifier";

/* données simulées */
$nom = "Ilissa";
$email = "ilissa@gmail.com";
$mdp = "123456";

/* affichage */
include($racine_path."view/header.php");

echo "<main class='container mt-4'>";
echo "<header>Vous êtes sur la page ".$pageariane."</header>";

include($racine_path."view/modifier.php");

echo "</main>";

include($racine_path."view/footer.php");
?>