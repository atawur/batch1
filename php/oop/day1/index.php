<?php
    //oop
    //class 

    class Bird{
        public $name;
        public $color;

        public function getName(){
            return $this->name;
        }
    }


    $bird = new Bird();
    $bird->name = "kingfihser";
    $bird->color = "black";
    echo $bird->getName();
    ///echo $bird->name;
    echo "<br>";
    echo "<br>";
    echo $bird->color;


    echo "<br/>";
    $pigeon = new  Bird();
    $pigeon->name = "pigion";
    $pigeon->color = "white";
    echo $pigeon->getName();

    echo "<br>";
    echo $pigeon->color;


    class Fruits {
        
        public $name;
        public $color;
        public $vitamin;

        function setName($name){
            $this->name = $name;
        }


        function getName(){
            return $this->name;
        }

        function setColor($color){
            $this->color = $color;
        }

        function getColor(){
            return $this->color;
        }





    }



    $apple = new Fruits();
    $apple->setName( "Apple");
    $apple->setColor("green");
    $apple->vitamin = "C";
    echo "<br>";
    echo $apple->getColor();



    $banana =  new Fruits();
    $apple->setName( "banana");
    $apple->setColor("yellow");
    $apple->vitamin = "A";
    echo "<br>";
    echo "fruits name ".$apple->getName()," this fruits has ",$apple->getColor(), " color";



    class Person {
        
        public $name;
        public $age;
        public $occupation;

        // function __construct($name,$age,$occupation)
        // {
        //     $this->name = $name;
        //     $this->age = $age;
        //     $this->occupation = $occupation;

        //     echo "<br>I am here";

        // }

        function person($name,$age,$occupation)
        {
            $this->name = $name;
            $this->age = $age;
            $this->occupation = $occupation;

            echo "<br>I am here";

        }
        function getName(){
            return $this->name;
        }

        function getAge(){
            return $this->age;
        }

        function getOccupation(){
            return $this->occupation;
        }

        function __destruct()
        {
            echo "<br> i last";
        }


    }

    $person1 = new Person('Atik',34,"Service");


    //echo "<br>",$person1->getName();





?>