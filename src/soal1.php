<?php

belahKetupat(5);

function belahKetupat($angka)
{
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = $angka; $j >= $i; $j--) {
            echo "&nbsp;";
        }
        for ($k = 1; $k < $i + 1; $k++) {
            echo "+";
        }
        echo "</br>";
    }

    for ($i = 1; $i < $angka; $i++) {
        for ($j = 1; $j <= $i + 1; $j++) {
            echo "&nbsp;";
        }
        for ($k = $angka; $k > $i; $k--) {
            echo "+";
        }
        echo "<br>";
    }
}
