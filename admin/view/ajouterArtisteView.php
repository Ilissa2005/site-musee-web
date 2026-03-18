<div class="form-box">
<form method="POST" action="../control/artisteControl.php">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <label>Nom:</label>
    <input type="text" name="nom" required>
    <label>Prenom :</label>
    <input type="text" name="prenom" required>
    <label>Bio :</label>
    <input type="text" name="bio" required>
    <label>lien image</label>
    <input type="text" name="lien_A" >
    <button type="submit">Ajouter</button>
</form>
</div>