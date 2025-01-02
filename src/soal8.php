<?php

class Bola
{
    function volume($r)
    {
        return (4 / 3) * pi() * ($r * $r * $r);
    }
}

$bola = new Bola();
echo ("volume bola jari-jari 21 = " . round($bola->volume(21)));
