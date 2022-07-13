<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Roman Number Converter</title>
</head>
<body>
<p><b>Enter a number using Roman numerals (I, V, X, L, C, D, M).</p></b>
<p><b>I = 1; V = 5; X = 10; L = 50; C = 100; D = 500; M = 1000.</p></b>
<p><b>Integers from I to MMMCMXCIX are converted correctly.</p></b>

<form action="Roman Number Converter.php" method="post">
    <div>
        <input type="text" name="roman_numeral"/>
    </div>
    <div>
        <button>Translate</button>
    </div>
</form>
</body>
</html>

<?php
$roman = $_POST['roman_numeral'];
$array = [];
$num = 0;
$roman = str_split(strrev($roman));
foreach ($roman as $v) {
    switch ($v) {
        case 'M':
            $array[] = 1000; break;
        case 'D':
            $array[] = 500; break;
        case 'C':
            $array[] = 100; break;
        case 'L':
            $array[] = 50; break;
        case 'X':
            $array[] = 10; break;
        case 'V':
            $array[] = 5; break;
        case 'I':
            $array[] = 1; break;
    }
}
for ($i = 0; $i < count($array); $i++) {
    if ($i == 0 || $array[$i] > $array[$i - 1] || $array[$i] == $array[$i - 1]) {
        $num += $array[$i];
    } else {
        $num -= $array[$i];
    }
}
echo "Result: ".$num;
?>