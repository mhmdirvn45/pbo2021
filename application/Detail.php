<?php

namespace App;

/**
 * trait untuk detail
 */
trait Detail
{
    use Pemesan, Pembayaran{
        sebPembayaran as public;
    }

    public function pemesan()
    {
        echo $this->name." dipesan oleh bapak irvan sebanyak 10 buah <br>";
    }
}