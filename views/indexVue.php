<?php
// Include Header
include("template/header.php");

?>
<a href="../views/FormAddVue.php" class="btn btn-primary tonbou">Créer</a>
<div class="container">
<div class="row">
<?php foreach ($ShowAccount as $info) {
  ?>
<div  class="col-lg-4">
    <div style="background-color:rgba(250,250,250,0.4)" class="card">
      <div class="card-block">
        <h3 class="card-title"><?php echo $info->getName(); ?></h3>
        <p class="card-text"><?php echo $info->getFirstName(); ?></p>
        <p class="card-text"><?php echo $info->getAmount();?>€</p>
        <!-- <a href="../controllers/detail.php?id=<?php echo $info->getId();?>" class="btn btn-primary">Détails</a> -->
        <a href="../controllers/update.php?id=<?php echo $info->getId();?>" class="btn btn-primary tonbou">Virement</a>
        <a href="../controllers/FormUpdate.php" class="btn btn-primary tonbou">Versement</a>
        <a href="../controllers/FormRetrait.php?id=<?php echo $info->getId();?>" class="btn btn-primary tonbou">Retrait</a>
        <a href="index.php?delete=<?php echo $info->getId(); ?>" class="btn btn-primary tonbou">Supprimer</a>
      </div>
    </div>
  </div>

  <?php
}
?>
</div>
</div>
<?php
// Include Footer
include("template/footer.php");

 ?>
