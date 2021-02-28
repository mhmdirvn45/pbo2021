<?php
require_once 'Mahasiswa.php';
class MahasiswaBaru extends Mahasiswa
{
    public $no_registrasi;


function __construct($rgs){
    $this->no_registrasi = $rgs;
}

public function bayarGedung(){
    
}
}
?>