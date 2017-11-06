<?php
require ("../entities/Client.php");
require ("../entities/Produit.php");
require ("../model/ClientManager.php");

//Instance of new Client
$data = [
  "id"=>"3",
  "name"=>"brandon",
  "age"=>"35"
];


include "../views/indexVue.php";
 ?>
