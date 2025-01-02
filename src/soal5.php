<?php

$array = [1, 7, 3, 9, 2, 4, 20, 5];

$terbesar = $array[0];
for ($i = 0; $i < count($array); $i++) {
    if ($terbesar < $array[$i]) {
        $terbesar = $array[$i];
    }
}
echo $terbesar;
