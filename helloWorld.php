<?php
    
    include ('header.php');
    
    //OBJECT ORIENTdED
    
    //instantiate the class
    $obj = new example;
    $obj->name = 'keith';
    $obj->printHelloWorld();
    
    
    print_r($obj);
    
    
    
    
    // First Start by making a Class
    class example {
        
        public $name;
        
        
        //constructor method
        //magical function
        
        //pass a variable
        function __construct(){
            
            $this->name = $name;
            
            //echo "<br>Hello World from constructor" .  $this->name;
            
        }
        
        function pintHelloWorld(){
            
            $this->name = $name;
            
            echo "<br>Hello World from constructor" .  $this->name;
            
        }
    
    }

    





?>
