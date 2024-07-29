<?php

class Car{
    private $make;
    private $model;
    private $vin;

    public function __construct($make, $model, $vin){
        $this->make = $make;
        $this->model = $model;
        $this->vin = $vin;
    }
    
    // public function __destruct() {
    //     echo "Car with VIN {$this->vin} is destroyed.<br>";
    // }

    public function getInfo(){
        return "Make". $this->make ."<br>Model". $this->model . "<br>vin". $this->vin;

    }

    public function getmake(){
        return $this->make;
    }
    public function setmake($make){
        $this->make = $make;
    }
    public function getmodel(){
        return $this->model;
    }
    public function setmodel($model){
        $this->model = $model;
    }
    public function getVin(){
        return $this->vin;
    }
    public function setVin($vin){
        $this->vin = $vin;
    }

}

// class 1 end
// class 2 start

class Inventory {
    private $cars = [];

    public function addCar(Car $car) {
        $this->cars[] = $car;
    }

    public function listAllCars() {
        foreach ($this->cars as $car) {
            echo $car->getInfo() . "<br>";
        }
    }

}

$car1 = new Car("Mercedes", "S Class", "123456");
$car2 = new Car("BMW", "M4 compation", "987654");

$theInventory = new Inventory();
$theInventory->addCar($car1);
$theInventory->addCar($car2);


$theInventory->listAllCars();



?>
