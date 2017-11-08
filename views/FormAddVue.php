<?php
// Include Header
include("template/header.php");

?>
<form class="" action="../controllers/index.php" method="post" enctype="multipart/form-data">

      <div class="form-group">
        <label for="exampleInputEmail1">Votre Nom</label>
        <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre nom">
        <small id="emailHelp" class="form-text text-muted">Veuillez indiquer votre nom</small>
      </div>



      <form class="" action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleInputEmail1">Votre Prénom</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="firstName" aria-describedby="emailHelp" placeholder="Votre prénom">
          <small id="emailHelp" class="form-text text-muted">Veuillez indiqer votre prénom.</small>
        </div>

        <form class="" action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="exampleInputEmail1">Sommes</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="amount" aria-describedby="emailHelp" placeholder="Ex : 1000">
            <small id="emailHelp" class="form-text text-muted">Veuillez insérer le montant que vous souhaiter ajouter à votre compte</small>
          </div>



      <button type="submit" name="send" class="btn btn-primary">Envoyer</button>
      <a href="" class="btn btn-primary tonbou">Virement</a>
      <a href="" class="btn btn-primary tonbou">Retrait</a>
      <a href="" class="btn btn-primary tonbou">Versement</a>
      <a href="" class="btn btn-primary tonbou">Supprimer</a>
    </form>

<?php
// Include Footer
include("template/footer.php");

 ?>
