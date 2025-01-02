<?php

$input = "aaaabbaccccddddcc";

$data = str_split($input);
for ($i = 0; $i < count($data); $i++) {
    $jumlah = 1;
    while ($data[$i] == $data[$i + 1]) {
        $jumlah = $jumlah + 1;
        $i++;
    }
    echo $data[$i] . " : " . $jumlah . "<br>";
}
