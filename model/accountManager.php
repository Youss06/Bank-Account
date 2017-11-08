<?php

class accountManager {

  public function getBdd(){
    $bd = new PDO('mysql:host=localhost;dbname=Bank', 'root', 'root');
   return $bd;
}

// Constructeur

public function add(vehicule $recovery ){
    $q = $this->getBdd()->prepare('INSERT INTO account(name, firstName, amount)
    VALUES(:name, :firstName, :amount)');

    // HERE Call Back Getters (getNom...)
    $q->bindValue(':name', $recovery->getName());
    $q->bindValue('firstName', $recovery->getFirstName(), PDO::PARAM_INT);
    $q->bindValue(':amount', $recovery->getAmount(), PDO::PARAM_STR);

    $q->execute();
}
