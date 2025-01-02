<?php

class Math
{
    function mean($data)
    {
        return array_sum($data) / count($data);
    }

    function median($data)
    {
        $n = count($data);
        if ($n % 2 == 0) {
            $c = ($n - ($n % 2)) / 2;
            return ($data[$c] + $data[$c + 1]) / 2;
        } else {
            return $data[$n / 2 + 1];
        }
    }

    function modus($data)
    {
        $tampung = [];
        for ($i = 0; $i < count($data); $i++) {
            $kunci = $data[$i];

            if (isset($tampung[$kunci])) {
                $tampung[$kunci] = $tampung[$kunci] + 1;
            } else {
                $tampung[$kunci] = 1;
            }
        }
        return $tampung;
    }
}

$math = new Math();
$data = [15, 20, 25, 30, 35, 40, 45, 45, 50, 55, 60];

echo "Mean : " . $math->mean($data) . "<br>";
echo "Median : " . $math->median($data) . "<br>";
var_dump($math->modus($data));
