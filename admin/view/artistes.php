<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<?php echo $lien_image;?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $nom." ".$prenom;?></h5>
    <p class="card-text"><?php echo $bio;?></p>
    <a href="<?php echo $modifier;?>" class="btn btn-primary">Modifier</a>
    <a href="<?php echo $sup;?>" class="btn btn-danger">Suprimer</a>
  </div>
</div>
