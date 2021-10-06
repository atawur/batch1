<?php
// class Bird{
//     private $name;
//     public $color;

//     public function getName(){
//         return $this->name;
//     }

//     private function getColor(){
//          return $this->color;
//     }

//     public function getBirdCOlor(){
//         return $this->getColor();
//     }


// }


// $b1= new Bird();

//$b1->name = "Kingfisher";
//$b1->color = "red";
//echo $b1->getBirdCOlor();



class Account{


    private $balance;
    public $accountName;

    public function __construct($balance,$accountName){

        $this->balance = $balance;
        $this->accountName = $accountName;

    }
    public function getBalance(){
        return $this->calculateBalance();
    }


    private function calculateBalance(){
       return $this->balance -500;
    }

    public function getAccountName(){
        return $this->accountName;
    }
}
echo "<br>";
$account = new Account(10001,"Md. yyyyyyyy");
///$account->balance = 100000;
echo $account->getBalance();

echo "<br>";


class Bird{
    protected $name;
    public $color;

    public function getName(){
        return $this->name;
    }

    private function getColor(){
         return $this->color;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getBirdCOlor(){
        return $this->getColor();
    }


}

class KingFIsher extends Bird{
    
    public function canFishing(){
        return "$this->name can fishing";
    }

}

$king_fisher = new KingFIsher();
$king_fisher->color="green";
$king_fisher->setName("Kingfihser");

echo $king_fisher->getName();
echo "<br>";
echo $king_fisher->canFishing();

// class Parrot{
    
// }





?>