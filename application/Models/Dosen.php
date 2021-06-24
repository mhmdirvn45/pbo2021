<?php

namespace App\Models;

require_once('Pengguna.php');


class dosen extends pengguna implements pegawai
{
    private $nip;
    private $nama;
    private $no_telp;
    public $tugasAkhir = [];

    public function validasiMahasiswa()
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

    public function setNama()
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setTugasAkhir(TugasAkhir $tga )
    {
        $this->tugasAkhir[] = $tga;
    }

    public function getTugasAkhir()
    {
        return $this->tugasAkhir;
    }
}