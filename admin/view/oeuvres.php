<div class="card" style="width: 18rem; margin: 20px;">
  <img class="card-img-top" src="<?php echo $lien_image; ?>" alt="Image oeuvre">
  <div class="card-body">
    <h5 class="card-title"><?php echo $nom_oeuvre; ?></h5>
    <p class="card-text">
        <?php echo $artiste . " - " . $description; ?>
    </p>
    <a href="<?php echo $modifier; ?>" class="btn btn-primary">Modifier</a>
    <a href="<?php echo $sup; ?>" class="btn btn-danger">Supprimer</a>
  </div>
</div>

