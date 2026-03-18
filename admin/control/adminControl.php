<?php
	$racine_path = '../';
	$titre = "Mon Profil - Musée Histoire des Œuvres";
	$pageariane = "Mon profil";
	/*view*/ include($racine_path."view/header.php");
	
	echo '<main>';
	echo "<header> Mon fil d'ariane -> vous êtes sur la page $pageariane </header>";
	$id = 0;
	$lien_image = "";
	$nom = "Haf";
	$email= "blablabla@gmail.com";
	$mdp = "******";
	$modifier=$racine_path."control/modifier.php?id=".$id."&type=user";
	$sup = $racine_path."control/sup.php?id=".$id."&type=user";
		/*view*/ include($racine_path."view/profilView.php");
	
	echo '</main>';
	
	/*view*/ include($racine_path."view/footer.php");

?>
