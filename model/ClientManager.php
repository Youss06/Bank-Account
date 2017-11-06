<?php

class ClientManager {

  public function getBdd() {
      $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
      return $bdd;
  }

}


 ?>
