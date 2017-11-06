<?php
declare(strict_types=1);

class Client {
  protected $id;
  protected $name;
  protected $age;

  //Setters
  public function setName($name) {
    $this->name = $name;
  }

  public function setAge($age) {
    $this->age = $age;
  }

  public function setId($id) {
    $this->id = $id;
  }

  //Getters
  public function getName() {
    return $this->name;
  }

  public function getAge() {
    return $this->age;
  }

  public function getId() {
    return $this->id;
  }

  //Mehtods

  public function __construct($data) {
    
  }


}

 ?>
