<?php

require ("../model/accountManager.php");
require '../entities/Account.php';

$AccountManager = new accountManager();


// POST for form's Input
if ($_POST) {
  $account = new Account(
    ['name' => $_POST['name'],
    'firstName' => $_POST['firstName'],
    'amount' => $_POST['amount']]);
    $AccountManager->add($account);
}

if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  $donnees = $AccountManager->delete($id);
}

$ShowAccount = $AccountManager->getShowAccount();
foreach ($ShowAccount as $key => $value) {
  $ShowAccount[$key] = new Account($value);
}

include ("../views/indexVue.php");
