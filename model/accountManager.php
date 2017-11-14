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
    $q->bindValue('firstName', $recovery->getFirstName(), PDO::PARAM_STR);
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


      public function get($id)
          {
            $id = (int) $id;
            $q = $this->getBdd()->query('SELECT * FROM account WHERE id = '.$id);
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            return new Account($donnees);
          }

   public function getUpdate($bank){
       $q = $this->bd->prepare ('UPDATE account SET name = :name, amount= :amount WHERE id = :id');

      $q->bindValue(':id', $bank->getId());
       $q->bindValue(':name', $bank->getName());
       $q->bindValue(':amount', $bank->getAmount());
       $q->execute();
     }

// public function withdrawal(){
// $q = $this->getBdd()->prepare('UPDATE account SET amount = :amount WHERE id= :id');
// }

// WITHDRAWAL
// function withDrawalAccount(Account $test){
//   $req=$this->getBdd()->prepare("UPDATE accounts SET amount= :amount WHERE id= :id");
//   $req->bindValue('id', $test->getId(), PDO::PARAM_INT);
//   $req->bindValue('amount',  $test->getAmount(), PDO::PARAM_INT);
//   $req->execute();
// }

}
