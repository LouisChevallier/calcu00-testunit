<?php

class Calc {

    public $num1;
    public $num2;
    public $cal;

    public function __construct($num1Inserted, $num2Inserted, $calInserted) {
        $this->num1 = $num1Inserted;
        $this->num2 = $num2Inserted;
        $this->cal = $calInserted;
    }

    public function calcMethod() {
      switch ($this->cal) {
        case 'add':
            $result = $this->num1 + $this->num2;
            break;
        case 'sub':
            $result = $this->num1 - $this->num2;
            break;
        case 'mul':
            $result = $this->num1 * $this->num2;
            break;

        default:
            $result = "Error";
            break;
      }
      return $result;
    }

}

class User {

    public $email;
    public $nom;
    public $prenom;
    public $age;

    public function __construct($num1Inserted, $num2Inserted, $calInserted) {
        $this->email = $emailInserted;
        $this->nom = $nomInserted;
        $this->prenom = $prenomInserted;
        $this->age = $ageInserted;
    }

    public function isValid() {
        
    }

}


 ?>