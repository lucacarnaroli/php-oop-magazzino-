<?php
class Computer {
    public $marca;
    public $processore;
    public $ram;
    public $schedaVideo;
    public $unitaArchiviazione;
    public $pollici;
} 

$mac = new Computer();
$mac->marca = 'Apple';
$mac->processore = 'Intel Core i5';
$mac->ram = '8GB';
$mac->schedaVideo = 'Intel Iris Plus';
$mac->pollici = 13;
var_dump($mac);

$dell = new Computer();
$dell->marca = 'Inspiron 15 5000';
$dell->processore = 'Intel Core i7';
$dell->ram = '8GB';
$dell->schedaVideo = 'NVIDIA MX250';
$dell->pollici = 15;
var_dump($dell);
