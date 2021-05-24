<?php

require_once('vendor/autoload.php');

use App\Pengguna;
use App\Penjual;
use App\Alamat;

$irvan = new Pengguna(3,"Muhammad Pramudia Irvan Chaniago", new Alamat(5, "Pontianak"));

$lapak_budi = new Penjual();
$lapak_budi->setName('Budi Satria');
$lapak_budi->setId(1);

$lapak_anisa = new Penjual();
$lapak_anisa->setName('Anisa Susanti');
$lapak_anisa->setId(2);

$lapak_wati = new Penjual();
$lapak_wati->setName('Wati Vera');
$lapak_wati->setId(3);

$irvan->setPenjual($lapak_budi);
$irvan->setPenjual($lapak_anisa);
$irvan->setPenjual($lapak_wati);

$penjual_irvan = $irvan->getPenjual();
echo $penjual_irvan[0]->getName();// Ada 3 Index (0,1,2