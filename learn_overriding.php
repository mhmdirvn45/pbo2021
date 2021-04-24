<?php

class Film
{
    public $Judul; 

    public function judulfilm(){
        echo "Saksikan film yang berjudul ". $this->Judul. " akan tayang pada Bioskop Cinema Indonesia di kota-kota terdekat <br>";
    }

    public function pres()
    {
        echo "Film ". $this->Judul . " dapat ditonton dengan tiket seharga Rp 50.000 setiap harinya <br>";
    }
}

class Rilis extends Film
{
    public function judulfilm()
    {
        echo "Film yang berjudul ". $this->Judul. " di sutradarai oleh Joko Anwar yang akan tayang secara preimere di seluruh Bioskop Cinema Indonesia" ;
    }

    public function parentFilm()
    {
        return parent::judulfilm();
    }
    public function getInfo()
    {
        $this->parentFilm();$this->pres(); $this->judulfilm();
    }
}

$jdlfilm = new Rilis();
$jdlfilm->Judul = 'Gundala';
$jdlfilm->getInfo();

