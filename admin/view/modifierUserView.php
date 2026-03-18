<div class="form-box">
<form method="POST" action="../control/userControl.php">

    <input type="hidden" name="id" value="<?php echo $id ?>">

    <label>Nom:</label>
    <input type="text" name="nom" value="<?php echo $nom ?>" required>

    <label>Email :</label>
    <input type="text" name="email" value="<?php echo $email ?>" required>

    <label>Password :</label>
    <input type="text" name="mtp" value="<?php echo $mdp ?>" required>
	 <label>lien_image :</label>
    <input type="text" name="lien_image" value="<?php echo $lien_image ?>" required>
    <button type="submit">Modifier</button>
</form>
</div>