<div class="form-box">
<form method="POST" action="../control/oeuvreControl.php">

    <input type="hidden" name="id" value="<?php echo $id ?>">

    <label>Titre :</label>
    <input type="text" name="nom_oeuvre" required>

    <label>Type :</label>
    <input type="text" name="type" required>

    <label>Artiste :</label>
    <input type="text" name="artiste" required>

    <label>Description :</label>
    <input type="text" name="description" required>

    <label>Année :</label>
    <input type="number" name="annee" required>

    <button type="submit">Ajouter</button>
</form>
</div>