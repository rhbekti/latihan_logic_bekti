<?php

hitung_char();

function hitung_char()
{
    $kunci = str_split($input);
    $data = array_count_values(str_split($input));
}
