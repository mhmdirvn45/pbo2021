<?php

namespace App;

use App\Minuman;

class Cendol implements Minuman 
{
    public function buat()
    {
        echo "Masukan cendol, santan dan gula merah cair kedalam wadah atau gelas ";
        echo "Kemudian tambahkan es batu.<br/>";
    }

    public function minum()
    {
        echo "Disedot dengan pipet.<br/><br/>";
    }

    public function memberikanPadaTeman()
    {
        echo "Ini untukmu, tenang saja, ini menyegarkan dan tidak meracunimu karena tidak ada sianida di dalamnya.<br/>";
    }
}

?>