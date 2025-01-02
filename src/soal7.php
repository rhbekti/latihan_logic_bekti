<?php

class Lingkaran
{
    function luas($r)
    {
        return pi() * $r * $r;
    }
}

$lingkaran = new Lingkaran();
echo ("luas lingkaran jari-jari 10 : " . round($lingkaran->luas(10)));
