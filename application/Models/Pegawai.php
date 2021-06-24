<?php

namespace App\Models;

interface pegawai
{
    #untuk interface visibilty yang harus digunakan hanya boleh  public
    public function setNip();

    public function presensiMasuk();

    public function getNip();

    public function setNama();

    public function getNama();
}