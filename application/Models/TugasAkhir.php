<?php

namespace App\Models;

class tugasAkhir
{
    public $id;
    public $judulTA;
    public $mahasiswaTA;
    public $pembibingTA = [];
    public $pengujiTA = [];

    function _construct($id, $judul, $mahasiswa, $pembibing, $penguji)
    {
        $this->id = $id;
        $this->judulTA = $judul;
        $this->mahasiswaTA = $mahasiswa;
        $this->pembibingTA = $pembibing;
        $this->pengujiTA = $penguji;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getJudulTA()
    {
        return $this->judulTA;
    }

    public function getmahasiswaTA()
    {
        return $this->mahasiswaTA;
    }



    public function tambahTA()
    {
    }
}