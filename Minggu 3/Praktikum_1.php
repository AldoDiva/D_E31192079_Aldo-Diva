<?php
class Car {
    //private
    public $model;
    public function getModel()
    {
        return "The car model is " . $this->model;
    }
}

$mercedes = new Car();

////akses property dari luar class.
$mercedes->model = "Mercedes benz";

echo $mercedes->getModel();

/*
Output : The car model is Mercedes benz

Penjelasan : 
Program dapat mengakses property dari luar class, karena properti yang diakses
memiliki Property dengan Mode Public.
*/