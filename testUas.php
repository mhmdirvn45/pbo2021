<?php

require_once('vendor/autoload.php');

use App\Models\Dosen;
use App\Models\TugasAkhir;


$irvan = new Dosen;

$TA_budi = new TugasAkhir(1, 'w', 'bd', 'sa', 'qp');


$TA_anisa = new TugasAkhir(2, 'r', 'an', 's', 'wa');


$TA_wati = new TugasAkhir(3, 'p', 'wt', 'da', 'sa');


$irvan->setTugasAkhir($TA_budi);
$irvan->setTugasAkhir($TA_anisa);
$irvan->setTugasAkhir($TA_wati);

$TA_irvan = $irvan->getTugasAkhir();
echo $TA_irvan[0]->getjudulTA();