<div class="form-box">
<form method="POST" action="../control/artisteControl.php">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <label>Nom:</label>
    <input type="text" name="nom" value="<?php echo $nom ?>" required>

    <label>Prenom :</label>
    <input type="text" name="prenom" value="<?php echo $prenom ?>" required>

    <label>Bio :</label>
    <input type="text" name="bio" value="<?php echo $bio ?>" required>
    <button type="submit">Modifier</button>
</form>
</div>