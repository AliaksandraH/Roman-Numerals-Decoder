<?php
$roman = "MMXVII";
$array = [];
$num = 0;
$roman = str_split(strrev($roman));
foreach ($roman as $v) {
    switch ($v) {
        case 'M':
            $array[] = 1000;
            break;
        case 'D':
            $array[] = 500;
            break;
        case 'C':
            $array[] = 100;
            break;
        case 'L':
            $array[] = 50;
            break;
        case 'X':
            $array[] = 10;
            break;
        case 'V':
            $array[] = 5;
            break;
        case 'I':
            $array[] = 1;
            break;
    }
}
for ($i = 0; $i < count($array); $i++) {
    if ($i == 0 || $array[$i] > $array[$i - 1] || $array[$i] == $array[$i - 1]) {
        $num += $array[$i];
    } else {
        $num -= $array[$i];
    }
}
echo $num;