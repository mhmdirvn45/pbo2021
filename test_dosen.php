<?php
use application\Dosen;
use application\Mahasiswa;
use application\frontend\MyDate;

require_once ('initialize.php');

$dos1 = new Dosen('11256663589633', 'Dosen Habibi Azka', '1111080', '050566947', '741258963', 'Tenaga Pengajar');

$dos1->mengajar();
$dos1->meneliti();

$irvan = new Mahasiswa('H1101191062', 'Muhammad Pramudia Irvan Chaniago', '05-05-2001', 'Pria');
$irvan->tampilkanNama();
$irvan->tampilkanAngkatan();

$tanggal = new MyDate();
echo $tanggal->penanggalan();