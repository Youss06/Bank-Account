<?php
// Include Header
include("template/header.php");

?>
<form class="" action="../controllers/index.php" method="post" enctype="multipart/form-data">


        <form class="" action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="exampleInputEmail1">Sommes</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="amount" placeholder="Ex : 1000">
            <small id="emailHelp" class="form-text text-muted">Veuillez insérer le montant que vous souhaiter ajouter à votre compte</small>
          </div>



      <button type="submit" name="send" class="btn btn-primary">Envoyer</button>
    </form>

<?php
// Include Footer
include("template/footer.php");

 ?>
