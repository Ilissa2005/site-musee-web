<?php
$titre = "Accueil - Musée Histoire des Œuvres";
$racine_path = "./";
$pageariane = "Accueil";
?>

<?php /* view */ include($racine_path."view/header.php"); ?>
<?php
$main = "

<section class='accueil-banniere'>
	<img src='".$racine_path."images/image_musee.jpg' alt='Salle du musée'>
</section>

<h2 class='accueil-titre'>Musée Histoire des Œuvres</h2>

<p class='accueil-intro'>
	Bienvenue au Musée Histoire des Œuvres. Notre musée vous propose un voyage à travers les époques :
	peintures, sculptures et créations contemporaines, pour découvrir comment l’art raconte le monde.
</p>

<section class='accueil-section'>
	<h3 class='accueil-sous-titre'>Une collection qui traverse les siècles</h3>

	<p>
		De la Renaissance aux mouvements modernes, nos salles mettent en avant des œuvres choisies
		pour leur force visuelle et leur importance historique. Chaque pièce a été sélectionnée pour
		permettre une visite claire, agréable et accessible à tous.
	</p>

	<p>
		Sur ce site, vous pouvez explorer notre sélection d’œuvres et découvrir les artistes qui ont marqué
		l’histoire de l’art. Chaque œuvre possède une fiche avec une image et une description pour vous aider
		à mieux comprendre son contexte, sa technique et son message.
	</p>

	<p>
		Notre objectif est simple : vous faire découvrir des œuvres marquantes, comprendre leur histoire,
		et apprendre à reconnaître les styles artistiques, tout en gardant une navigation facile.
	</p>
</section>

<section class='accueil-image-milieu'>
	<img src='".$racine_path."images/image1_musee.jpg' alt='Galerie du musée'>
</section>

<section class='accueil-section'>
	<h3 class='accueil-sous-titre'>Expositions et découvertes</h3>

	<p>
		Le musée organise aussi des expositions temporaires : artistes contemporains, thèmes historiques,
		et œuvres rarement présentées. L’objectif est de proposer une expérience variée et vivante,
		qui évolue au fil du temps.
	</p>

	<p>
		N’hésitez pas à visiter les rubriques <b>Œuvres</b> et <b>Artistes</b> pour commencer votre visite virtuelle,
		et la rubrique <b>Contact</b> si vous souhaitez nous écrire.
	</p>
</section>

<div class='accueil-boutons'>
	<a class='btn btn-primary' href='".$racine_path."control/oeuvre.php'>Voir les œuvres</a>
	<a class='btn btn-secondary' href='".$racine_path."control/artiste.php'>Voir les artistes</a>
	<a class='btn btn-outline-dark' href='".$racine_path."control/contact.php'>Contact</a>
</div>
";

/* view */ include($racine_path."view/main.php");
?>
<?php /* view */ include($racine_path."view/footer.php");?>
