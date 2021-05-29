<?php 

namespace App;

class Pesanan
{
    use Detail;

    public function cekNama()
    {
        echo "Pesanan  ". $this->name. "<br/>";
    }

    public function alamat()
    {
        echo "Pesanan ".$this->name." bapak irvan akan di antarkan ke alamat yang sudah ditetnukan oleh kurir<br>";
    }

}