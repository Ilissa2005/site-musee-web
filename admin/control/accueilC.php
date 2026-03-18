<?php
$titre = "Accueil - Musée Histoire des Œuvres";
$pageariane = "Accueil"; 
$racine_path = '../';	
/*view*/  include($racine_path.'view/header.php');
echo '<main>'; 
/*view*/  
include($racine_path.'view/accueilV.php');
echo '</main>'; 
include($racine_path.'view/footer.php');?>
