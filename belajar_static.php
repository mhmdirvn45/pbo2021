<?php
require_once('vendor/autoload.php');
use App\Mahasiswa;

// $irvan = new Mahasiswa("H1101191062","Muhammad Pramudia Irvan Chaniago","5 Mei 2001","Laki - laki",);
// $irvan->bergerak();

Mahasiswa::bergerak();

echo Mahasiswa::$status . "<br/>";
$status_mahasiswa = Mahasiswa::NON_AKTIF;
echo $status_mahasiswa . "<br/><br/>";

echo Mahasiswa::hitungSks(10,3);