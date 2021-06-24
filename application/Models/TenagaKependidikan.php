<?php

namespace App\Models;

class dosen extends pengguna
{
    private $nip;
    private $nama;
    private $alamat;

    public function hitungTunajanganKinerja()
    {
    }

    public function setNip($nip)
    {
        $this->nip = $nip;
    }

    public function presensiMasuk()
    {
    }

    public function getNip()
    {
        return $this->nip;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }           
}