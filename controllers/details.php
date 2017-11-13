<?php
require ("../model/accountManager.php");

$AccountManager = new accountManager();

if (isset($_GET['id'])) {
  # code...
  $id = $_GET['id'];
  $detailAccount = $AccountManager->recoveryAccount($id);
  //transformer $datailVehicule [] -> object car_manager
  $Account = new Account($detailAccount);
}
