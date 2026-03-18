<h2>Supprimer mon compte</h2>

<p>Fonctionnalité non implémentée pour le moment.</p>

<form action="<?php echo $racine_path.'control/profil.php'; ?>" method="POST">

	<div class="form-check mb-3">
		<input class="form-check-input" type="checkbox" id="confirm" name="confirm">
		<label class="form-check-label" for="confirm">
			Je confirme vouloir supprimer mon compte
		</label>
	</div>

	<button type="submit" class="btn btn-danger">Envoyer</button>

	<a href="<?php echo $racine_path.'control/profil.php'; ?>" class="btn btn-secondary">
		Revenir
	</a>

</form>