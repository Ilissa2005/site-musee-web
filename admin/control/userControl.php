<?php
$racine_path = '../';
$titre = "User - Musée Histoire des Œuvres";
$pageariane='User';
/* header */
include($racine_path."view/header.php");
echo '<main>';
echo "<header> Mon fil d'ariane -> vous êtes sur la page $pageariane </header>";
$users = array(array("","haf", "blablabla@gmail.com","****"),
    array("","nom", "email","****"),
    array("","nom", "email","****"),
    array("","nom", "email","****")
);
echo '<a href="../control/ajouter.php?type=user" class="btn btn-success";">Ajouter un user</a>';
echo '<div class="cards-container">';
/* Boucle d'affichage */
for ($i = 1; $i < count($users); $i++) {
        $id=$i;
	$lien_image=$users[$id][0];
	$nom = $users[$id][1];
	$email = $users[$id][2];
	$mdp=$users[$id][3];
	 $modifier=$racine_path."control/modifier.php?id=".$id."&type=user";
    $sup = $racine_path."control/sup.php?id=".$id."&type=user";
    include($racine_path."view/user.php");
}
echo '</div>';
echo '</main>';

/* footer */
include($racine_path."view/footer.php");
?>
