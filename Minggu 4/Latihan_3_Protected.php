<?php

class Tablet {
    protected $merk, $camera, $memory;

    public function setMerk( $merk ) {
        $this->merk = $merk;
    }

    public function getMerk() {
        return $this->merk;
    }

    public function setCamera( $camera ) {
        $this->camera = $camera;
    }

    public function getCamera() {
        return $this->camera;
    }

    public function setMemory( $camera ) {
        $this->camera = $camera;
    }

    public function getMemory() {
        return $this->camera;
    }

    public function getInfoProduk()
    {
        $str = "Merk : {$this->merk} <br> Camera : {$this->camera} Gb <br> Memory : {$this->memory} Mp";

        return $str;
    }

}

class Handphone extends Tablet {
    public $nama;

    public function __construct( $nama = "nama", $merk = "merk", $camera = 0, $memory = 0 ) {

        $this->nama = $nama;
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

    public function getInfoProduk()
    {
        $str = "Nama : {$this->nama} <br>" . parent::getInfoProduk();
        return $str;
    }
}

$hp = new Handphone("P10", "Huawei", 24, 16);
echo $hp->getInfoProduk();

/*
Output : 
Nama : P10
Merk : Huawei
Camera : 24 Mp
Memory : 16 Gb

Penjelasan :
Karena property pada kelas parent memiliki Visibility protected, maka untuk mengakses property parent (Tablet) pada
kelas child (Handphone) hanya dapat dilakukan secara langsung dari dalam kelas child (Handphone).

Karena Property dengan Visibility protected tetap dapat dikases oleh child class, namun tetap tidak dapat diakses
di luar kelas yang tidak termasuk child class. 

Jika ingin mengakses property kelas Tablet dari luar kelas tersebut,jika tidak termasuk kelas turunan maka harus 
menggunakan metode getter dan setter.
*/