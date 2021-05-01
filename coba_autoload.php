<?php
require_once('vendor/autoload.php');

use App\Frontend\MyDate as FMyDate;
use App\Mydate;

$tanggal = new FMyDate();
$tgl = new MyDate();

$tgl->setDay(28);
$tgl->setMonth(4);
$tgl->setYear(2021);

echo $tgl->getYear();

echo $tanggal->penanggalan();