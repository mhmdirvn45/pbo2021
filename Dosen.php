<?php
require_once 'Pegawai.php';
class Dosen extends Pegawai{
    public $nidn;
    public $jabatan_akademis;


function __construct($nidn, $jbtn){
    $this->nidn = $nidn;
    $this->jabatan_akademis = $jbtn;
}

public function mengajar(){

}

public function meneliti(){

}
}
?>