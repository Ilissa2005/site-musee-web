<div class="form-box">
<form method="POST" action="../control/mailC.php">
    <label>Destinataire :</label>
    <input type="email" name="email" required>
    <label>Sujet :</label>
    <input type="text" name="sujet" required>
    <label>Message :</label>
    <textarea name="message" required></textarea>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
</div>