<?php
    class Car{
        //data member
        private $modelCar;
        private $price;
        // construct with paramter
        public function __construct($model,$pri){
            $this->modelCar = $model;
            $this->price    = $pri;

        }
        //method
        public function Output(){
            echo "This is ModelCar :".$this->modelCar;
            echo "<br>";
            echo "This is CarPrice :".$this->price;
        }
    }
    $obj = new Car("TESLA",1200); //create object
    $obj->Output();
?>