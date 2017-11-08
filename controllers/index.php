<?php

require ("../model/accountManager.php");


function loadClass($class) {
  require("../entities/" . $class . ".php");
}
spl_autoload_register("loadClass");

$AccountManager = new accountManager();

// if ($_POST) {
//   # code...
//   $account = new account(
//     ['name' => $_POST['name'],
//     'firstName' => $_POST['firstName'],
//     'amount' => $_POST['amount'])
//     $AccountManager->add($car);
// }

include ("../views/indexVue.php");
