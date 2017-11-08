<?php

class accountManager {

  public function getBdd(){
    $bd = new PDO('mysql:host=localhost;dbname=Bank', 'root', 'root');
   return $bd;
}

// Constructeur

public function add(account $recovery ){
    $q = $this->getBdd()->prepare('INSERT INTO account(name, firstName, amount)
    VALUES(:name, :firstName, :amount)');

    // HERE Call Back Getters (getNom...)
    $q->bindValue(':name', $recovery->getName());
    $q->bindValue('firstName', $recovery->getFirstName(), PDO::PARAM_INT);
    $q->bindValue(':amount', $recovery->getAmount(), PDO::PARAM_STR);

    $q->execute();
}

// Function to Show Account who was create previously

public function getShowAccount(){
$q = $this->getbdd()->query('SELECT * FROM account');
$donnees = $q->fetchAll(PDO::FETCH_ASSOC);
return $donnees;
}

public function delete($id) {
        $q = $this->getBdd()->prepare('DELETE FROM account WHERE account.id = :id');
        $q->bindValue(':id', $id, PDO::PARAM_INT);

        $q->execute();
      }

}
