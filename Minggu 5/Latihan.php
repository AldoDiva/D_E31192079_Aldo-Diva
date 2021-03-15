<?php

interface hitungLuas {
    /*
    Karena pada kelas inteface tidak boleh ada property sedangkan di soal terdapat  
    perintah "Buatlah interface yang bernama hitungLuas dengan property bernama ‘sisi’ ...".
    Maka saya asumsikan property 'sisi' sebagai 'PHP Function – Arguments'
    Sehingga : 
    - Misal pada segitiga maka sisi juga sebagai alas 
    - Misal pada lingkaran sisi sebagai jari-jari.
    */
    public function hitungLuasPersegi($sisi);

    public function hitungLuasSegitiga($sisi);

    public function hitungLuasLingkaran($sisi);
}

class Persegi implements hitungLuas {

    public function hitungLuasPersegi($sisi)
    {
        return $sisi * $sisi;
    }

    public function hitungLuasSegitiga($sisi)
    {
        return "Error : Objek bukanlah segitiga.";
    }

    public function hitungLuasLingkaran($sisi)
    {
        return "Error : Objek bukanlah Lingkaran";
    }
}

class Segitiga implements hitungLuas {

    public function hitungLuasPersegi($sisi)
    {
        return "Error : Objek bukanlah persegi";
    }

    public function hitungLuasSegitiga($sisi)
    {
        return (1/2) * $sisi * $sisi;
    }

    public function hitungLuasLingkaran($sisi)
    {
        return "Error : Objek bukanlah lingkaran";
    }
}

class Lingkaran implements hitungLuas {

    public function hitungLuasPersegi($sisi)
    {
        return "Error : Objek bukanlah persegi";
    }

    public function hitungLuasSegitiga($sisi)
    {
        return "Error : Objek bukanlah segitiga";
    }

    public function hitungLuasLingkaran($sisi)
    {
        return $sisi * $sisi * pi();
    }
}

$objek1 = new Persegi();
$objek2 = new Segitiga();
$objek3 = new Lingkaran();

echo "<b>Jika luas sisi = 7</b><hr>";
echo "Luas Persegi = {$objek1->hitungLuasPersegi(7)}";
echo '<br>';
echo "Luas Segitiga = {$objek2->hitungLuasSegitiga(7)}";
echo '<br>';
echo "Luas Lingkaran = {$objek3->hitungLuasLingkaran(7)}";

/*
Output :
Jika luas sisi = 7
Luas Persegi = 49
Luas Segitiga = 24.5
Luas Lingkaran = 153.93804

Penjelasan :
kelas Persegi, Segitiga, dan Lingkaran melakukan implements terhadap interface 'hitungLuas',
maka ditiap-tiap kelas tersebut wajib menggunakan method yang ada didalam kelas interface 'hitungLuas'.
*/
