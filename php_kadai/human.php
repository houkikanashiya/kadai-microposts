<?php 
require_once 'animal.php';
require_once 'thinkable.php';
Class Human extends Animal {
    use Thinkable;
    
   protected $hobby;
    
    function __construct($name,$age,$hobby){
        $this->name=$name;
        $this->age=$age;
        $this->hobby=$hobby;
    }
}
?>