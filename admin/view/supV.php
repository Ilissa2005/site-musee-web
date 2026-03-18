<div class="form-box">
    <h2><?php echo $message;?></h2>
<form method="POST" action="<?php echo $revenir?>">
    <label> <input type="radio" name="choix" value="oui"> Oui </label> 
    <label> <input type="radio" name="choix" value="non"> Non </label>  
        <button type="submit">Envoyer</button>
</form>
</div>