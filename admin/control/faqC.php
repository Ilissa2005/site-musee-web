<?php
$racine_path = '../';
$titre = "FAQ - Musée Histoire des Œuvres";
$pageariane = "FAQ";
/* header */
include($racine_path."view/header.php");
echo '<main>';
echo "<header> Mon fil d'ariane -> vous êtes sur la page $pageariane </header>";
echo '<div class="cards-container">';
$faqs = array(
    array("qst1","REP"),
    array("qst2","rep2"),
    array("qst3","rep3")
);
/* boucle d'affichage */
for ($i = 0; $i < count($faqs); $i++) {
        $id=$i;
        $qst=$faqs[$i][0];
	$rep=$faqs[$i][1];
	include($racine_path."view/faqV.php");
}
echo '</div>';
echo '</main>';
/* footer */
include($racine_path."view/footer.php");
?>
