<?php

abstract class Account {
  // Protected
  Protected $name;
  Protected $firstName;
  Protected $amount;
}

// Constructor
public function __construct(array $data){
      $this->hydrate($data);
    }

    // Hydrate
public function hydrate(array $data)
  {
    foreach ($data as $key => $value) {
      $method = 'set' . ucfirst($key);
      if (method_exists($this,$method)) {
      $this->$method($value);
      }
    }
}

public function getId()
    {
        return $this->id;
    }

   public function setId($id)
    {
        $id = (int)$id;
          if ($id > 0)
      {
        $this->id = $id;
      }
    }

   public function getName()
    {
        return $this->name;
    }

   public function setName($name)
    {
            if (is_string($name))
        {
          $this->name = $name;
        }
    }


   public function getFirstName()
    {
        return $this->firstName;
    }

   public function setFirstName($firstName)
    {
          if (is_string($firstName))
      {
        $this->firstName = $firstName;
      }
    }

   public function getAmount()
    {
        return $this->amount;
    }

   public function setAmount($amount)
    {
            if (is_string($amount))
        {
          $this->amount = $amount;
        }
    }
