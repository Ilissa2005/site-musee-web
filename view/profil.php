<?php include("header.php"); ?>

<main class="container mt-4">

	<header>
		Vous êtes sur la page <?php echo $pageariane; ?>
	</header>

	<h2>Mon Profil</h2>

	<div class="card p-3 mt-3">

		<p><strong>Nom :</strong> <?php echo $nom; ?></p>

		<p><strong>Email :</strong> <?php echo $email; ?></p>

		<p><strong>Mot de passe :</strong> ******</p>

		<a href="<?php echo $racine_path.'control/modifier.php'; ?>" class="btn btn-primary">Modifier</a>
		<a href="<?php echo $racine_path.'control/supprimer.php'; ?>" class="btn btn-danger">Supprimer</a>

	</div>

</main>

<?php include("footer.php"); ?>