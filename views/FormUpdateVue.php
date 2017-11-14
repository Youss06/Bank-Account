<?php
// Include Header
include("template/header.php");

?>
<form class="" action="index.php" method="post">



          <div class="form-group">
            <label for="amount">Sommes</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="amount" vplaceholder="Ex : 1000">

            <input type="hidden" class="form-control" id="formGroupExampleInput" value="<?php echo $info->getName(); ?>" name="id" placeholder="cash">
            <small id="emailHelp" class="form-text text-muted">Veuillez insérer le montant que vous souhaiter ajouter à votre compte</small>
          </div>


          <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput" name="addMoney" placeholder="addMoney">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput" name="takeMoney" placeholder="takeMoney">
            </div>


      <button type="submit" name="submitUpdate" class="btn btn-primary">Envoyer</button>

    </form>

<?php
// Include Footer
include("template/footer.php");
