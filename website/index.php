<?php

// class TestSum {
//     public $num1=1;
//     public $num2=2;

//     function sum (){
//         return $this->num1 + $this->num2 ;

//     }

// }

// $x= new TestSum;
// echo $x->sum();


interface Animals{
    public function makeSound();
}

class Cat implements Animals{
    public function makeSound(){
        echo "mewo";
    }
}

class Mouse implements Animals{
    public function makeSound(){
        echo "squeak";
    }
}

class Dog implements Animals{
    public function makeSound(){
        echo "bark";
    }
}

$cat = new Cat();
$mouse = new Mouse();
$dog = new Dog();
$animal = array($cat , $mouse , $dog);

foreach ($animal as $a){
     $a-> makeSound();
     echo "<br>" ;

}


?>