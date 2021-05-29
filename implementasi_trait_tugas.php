<?php

require_once ('vendor/autoload.php');

use App\Pesanan;

$ramdan = new Pesanan;
$ramdan->name = 'Kemeja hitam';

$ramdan->cekNama();
$ramdan->Pemesan();
$ramdan->alamat();
$ramdan->sebPembayaran();