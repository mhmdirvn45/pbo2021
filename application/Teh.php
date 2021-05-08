<?php

namespace App;

class Teh implements Minuman
{
    public function buat()
    {
        echo "Tuangkan air hangat/panas kedalam gelas, ";
        echo "kemudian masukkan teh celup  dan gula secukupnya ke dalam gelas ";
        echo "Aduk secara perlahan hingga gula larut dan air berubah warna.";
    }

    public function minum()
    {
        echo "Dapat diminum secara sedikit sedikit atau langsung dihabiskan.<br/>";
    }
    
    public function tambahGula()
    {
        echo "Tambahkan gula apabila dirasa kurang pas manisnya.<br/>";
    }
}