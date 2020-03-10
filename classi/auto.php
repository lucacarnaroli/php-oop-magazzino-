<?php
//scrivo la classe con il PascalCase.
class Computer {
    public $marca;
    public $processore;
    public $ram;
    public $schedaVideo;
    public $unitaArchiviazione;
    public $pollici;
    //faccio una funzione(detta METODO) che mi permette di calcolare il prezzo del pc in base a dei valori(a , b).
    public function price($a) {
        return $this->b * $a;
    }
}

// COMPUTER APPLE
$mac = new Computer();
$mac->marca = 'Apple';
$mac->processore = 'Intel Core i5';
$mac->ram = '8GB';
$mac->schedaVideo = 'Intel Iris Plus';
$mac->pollici = 13;
//tramite l'operatore(->)accedo all'attributo di una istanza.
$mac->b = 400;
$price = $mac->price(4);
echo $price;
var_dump($mac);

// COMPUTER DELL
$dell = new Computer();
$dell->marca = 'Inspiron 15 5000';
$dell->processore = 'Intel Core i7';
$dell->ram = '8GB';
$dell->schedaVideo = 'NVIDIA MX250';
$dell->pollici = 15;

$dell->b = 200;
$price = $dell->price(3);
echo $price;
var_dump($dell);
