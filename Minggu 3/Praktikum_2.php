<?php
class Car {
    //private
    private $model;
    public function getModel()
    {
        return "The car model is " . $this->model;
    }

    //perbaikan
    public function setModel($model){
        $this->model = $model;
    }
}

$mercedes = new Car();

////akses property dari luar class.

// $mercedes->model = "Mercedes benz"; //jika mengakses dari luar kelas akan terjadi error

//perbaikan
$mercedes->setModel("Mercedes benz");

echo $mercedes->getModel();

/*
Output : Fatal error: Uncaught Error: Cannot access private property Car::$model in C:\xampp\htdocs\Minggu 3\Praktikum_2.php:14 Stack trace: #0 {main} thrown in C:\xampp\htdocs\Minggu 3\Praktikum_2.php on line 14

Penjelasan :
Kode diatas mengalami error karena program mencoba memodifikasi properti dengan Property Visibility Private dari luar class, 
Sehingga terjadi error. Untuk mengatasinya adalah dengan membuat functon setter seperti program yang telah saya tambahkan.
Sehingga Output nya Menjadi: The car model is Marcedez Benz