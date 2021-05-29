<?php

namespace App;

/**
 * trait visibility override
 */
trait Pembayaran
{
    private function sebPembayaran()
    {
        echo "Pesanan ". $this->name." Sudah dibayar lunas oleh bapak irvan melalu transfer rekening bank";
    }
}