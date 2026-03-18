<div class="form-box">
<form method="POST" action="../control/userControl.php">

    <input type="hidden" name="id" value="<?php echo $id ?>">

    <label>Nom :</label>
    <input type="text" name="nom" required>
    <label> Email :</label>
    <input type="text" name="email" required>
    <label>Password (l'utilisateur doit le changer):</label>
    <input type="password" name="mdp" required>
    <button type="submit">Ajouter</button>
</form>
</div>
