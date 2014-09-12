<?php

	$car = new taurus;
    
    $car->setColor('blue');
	
    print_r($car);
	
    echo $car->make;
    
    
    abstract class car{
        protected $engine;
        protected $wheels;
        protected $doors;
        protected $length;
        protected $weight;
        protected $color;
    
        public function setEngine($color){
        
        }
        public function setWheels($color){
            
        }
        public function setDoors($color){
            
        }
        public function setLength($color){
            
        }
        public function setWeight($color){
            
        }
        public function setColor($color){
            $this->color = $color;

        }
        
        
    }

    abstract class ford extends car {
        
    }
    class taurus extends ford {
    
        public function __construct(){
            $this->engine = 'V6';
            $this->wheels = '4';
            $this->doors = '4';
            $this->length = 'cargo';
            $this->weight = '100tons';
            $this->color = 'green';

            
            
            
        }
    }




?>
