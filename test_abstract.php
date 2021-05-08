<?php
require_once ('vendor/autoload.php');

use App\Cendol;
use App\Kopi;
use App\Teh;
use App\EsJeruk;

$cendol_dawet = new Cendol();
$cendol_dawet -> minum();

$kopi_aming = new Kopi();
$kopi_aming->buat();
$kopi_aming->minum();

$kopi_asiang = new Kopi();
$kopi_asiang->buat();
$kopi_asiang->tambahSusu();

EsJeruk::diLihat();

$tehes = new Teh();
$tehes->buat();
$tehes->tambahGula();
$tehes->minum();