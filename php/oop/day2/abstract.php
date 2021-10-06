<?php

abstract class Shape{
    abstract function getArea();

    abstract function drawShape();

    public function sayHi(){
        echo "hi";
    }
}

// $s = new Shape();

class Rectangle extends Shape{
       
      private $height;
      private $width;

      public function __construct($height,$width)
      {
          $this->height = $height;
          $this->width = $width;
      }
      public function getArea(){
                return $this->height * $this->width;
       }

       public function drawShape(){
            return " use your pencil and ruller";
       }
}

$rec = new Rectangle(10,30);


echo $rec ->getArea();

echo $rec->drawShape();
echo "<br>";
echo $rec->sayHi();

class Triangle extends Shape{
    private $height;
    private $vumi;

    public function __construct($height,$vumi)
    {
        $this->height = $height;
        $this->vumi = $vumi;
    }
    public function getArea(){
              return 1/2*($this->height * $this->vumi);
     }

     public function drawShape(){
          return " use your pencil and ruller";
     }  

     function sayHi(){
         echo "this hi from triangel";
     }
}

echo "<br>";
$t = new Triangle(10,30);
echo $t->getArea();
echo "<br>";
echo $t->sayHi();

?>