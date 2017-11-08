<?php
// Include Header
include("template/header.php");

?>
<a href="../views/formVue.php" class="btn btn-primary tonbou">Créer</a>
<?php foreach ($ShowVehicule as $car) {
  ?>
<div  class="col-lg-4">
    <div style="background-color:rgba(250,250,250,0.4)" class="card">
      <div class="card-block">
        <h3 class="card-title"><?php echo $car->getModel(); ?></h3>
        <p class="card-text"><?php echo $car->getMark(); ?></p>
        <p class="card-text"><?php echo $car->getColor(); ?></p>
        <p class="card-text"><?php echo $car->getYears(); ?></p>
        <a href="../controllers/detail.php?id=<?php echo $car->getId();?>" class="btn btn-primary">Détails</a>

        <a href="../controllers/update.php?id=<?php echo $car->getId();?>" class="btn btn-primary tonbou">Modifier</a>
        <a href="index.php?delete=<?php echo $value['id']; ?>" class="btn btn-primary tonbou">Supprimer</a>
      </div>
    </div>
  </div>

  <?php
}
?>

<?php
// Include Footer
include("template/footer.php");

 ?>
