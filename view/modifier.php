<h2>Modifier mes informations</h2>

<form action="<?php echo $racine_path.'control/profil.php'; ?>" method="POST">

	<div class="mb-3">
		<label class="form-label" for="nom">Nom</label>
		<input class="form-control" type="text" id="nom" name="nom" value="<?php echo $nom; ?>">
	</div>

	<div class="mb-3">
		<label class="form-label" for="email">Email</label>
		<input class="form-control" type="email" id="email" name="email" value="<?php echo $email; ?>">
	</div>

	<div class="mb-3">
		<label class="form-label" for="mdp">Mot de passe</label>
		<input class="form-control" type="password" id="mdp" name="mdp" value="<?php echo $mdp; ?>">
	</div>

	<button type="submit" class="btn btn-primary">Envoyer</button>
	<a href="<?php echo $racine_path.'control/profil.php'; ?>" class="btn btn-secondary">Revenir</a>

</form>