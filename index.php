// 1-vazifa<br>

<?php

$s = 0;
$i = 1;
$last = 100;

do {
    $s = $s + $i;
    $i++;
} while ($i <= 100);
echo $s;

?><br><br>

// 2-vazifa<br>

<?php

for ($i = 0; $i < 15; $i = $i + 1) {
    echo '*';
}

?><br><br>

// 3-vazifa<br>

<?php

$n = 5;

$faktorial = 1;
$i = 1;

while ($i <= $n) {
    $faktorial *= $i;
    $i++;
}

echo $n . " faktoriali: " . $faktorial;

?><br><br>

// 4-vazifa<br>

<?php
function karraJadvaliniHisoblash($raqamlar)
{
    $i = 1;
    while ($i <= 10) {
        $natija = $raqamlar * $i;
        echo "$raqamlar x $i = $natija" . PHP_EOL;
        $i++;
    }
}

// Misol uchun 7 raqamini hisoblash
karraJadvaliniHisoblash(6);

?><br><br>

// 5-vazifa<br>

<?php

function extractNumbers($inputText)
{
    $numbers = array();
    $length = strlen($inputText);
    $i = 0;

    while ($i < $length) {
        $num = '';

        // Skip non-digit characters
        while ($i < $length && !is_numeric($inputText[$i])) {
            $i++;
        }

        // Extract the number until a non-digit character is found
        while ($i < $length && is_numeric($inputText[$i])) {
            $num .= $inputText[$i];
            $i++;
        }

        // Add extracted number to the array
        if (!empty($num)) {
            $numbers[] = $num;
        }
    }

    return $numbers;
}


$inputText = "Ushbu matn 26.11.2019 16:59 da yozildi. 1minut kam 5";
$extractedNumbers = extractNumbers($inputText);

print_r($extractedNumbers);

?><br><br>

// 6-vazifa<br>

<?php

// $M = 24;
// $N = 7;

// $qoldiq = $M % $N; // qoldiqni hisoblash

// $butun_qism = intval($M / $N); // butun qismini hisoblash

// echo "M sonining N soniga bo'linish natijasi: " . $butun_qism . " butun qismini va " . $qoldiq . " qoldiqni beradi.";

$M = 24;
$N = 7;

while ($qoldiq) {
    $qoldiq = $M % $N;
    while ($butun_qism) {
        intval($M / $N);
    }
}

echo "M sonining N soniga bo'linish natijasi: " . $butun_qism . " butun qismini va " . $qoldiq . " qoldiqni beradi.";

print_r($qoldiq);
print_r($butun_qism);


?><br><br>

// 7-vazifa<br>

<!DOCTYPE html>
<html>

<head></head>

<body>
    <div class="chessboard">
        <?php
        $letters = array("a", "b", "c", "d", "e", "f", "g", "h");

        for ($i = 8; $i >= 1; $i--) {
            for ($j = 0; $j < 8; $j++) {
                $cellId = $letters[$j] . $i;
                $class = (($i + $j) % 2 == 0) ? "white" : "black";
                echo "<div id='$cellId' class='cell $class'></div>";
            }
        }
        ?>
    </div>

    <style>
        .chessboard {
            display: flex;
            flex-wrap: wrap;
            width: 400px;
        }

        .cell {
            width: 50px;
            height: 50px;
        }

        .white {
            background-color: #ffffff;
        }

        .black {
            background-color: #000000;
        }
    </style>
</body>

</html>


<br><br>

// 8-vazifa<br>

<?php

$narx = 0.1;
$ogirlik = 1;

while ($ogirlik <= 1.0) {
    echo $ogirlik . " kg konfetning narxi: " . $narx . " so'm<br>";
    $ogirlik += 0.1;
    $narx += 0.1;
}

?><br><br>

// 9-vazifa<br>

<?php

$litrlik_bochka = 100;

$litrlik_chelak_3 = 3;
$litrlik_chelak_4 = 4;

$total_sekund = 0;

$total_suvgacha_3 = 0;
$total_suvgacha_4 = 0;

while ($litrlik_bochka > 0) {

    if ($litrlik_bochka >= $litrlik_chelak_3) {
        $litrlik_bochka -= $litrlik_chelak_3;
        $total_suvgacha_3 += $litrlik_chelak_3;
    } else {
        $total_suvgacha_3 += $litrlik_bochka;
        $litrlik_bochka = 0;
    }

    if ($litrlik_bochka >= $litrlik_chelak_4) {
        $litrlik_bochka -= $litrlik_chelak_4;
        $total_suvgacha_4 += $litrlik_chelak_4;
    } else {
        $total_suvgacha_4 += $litrlik_bochka;
        $litrlik_bochka = 0;
    }
    $total_sekund++;
}

echo "Bochka $total_sekund sekundda to'ldi.\n";
echo "3-litrlk chelakdan $total_suvgacha_3 litr suv to'landi.\n";
echo "4-litrlk chelakdan $total_suvgacha_4 litr suv to'landi.\n";

?><br><br>

// 10-vazifa<br>

<?php

$s = 0;
$i = 1;
$last = 10;

do {
    $s = $s + $i;
    $i++;
} while ($i <= 10);

echo " sonlar yig'indisi: " . $s;

?><br><br>

// 11-vazifa<br>

<?php

for ($i = 9; $i >= 0; $i = $i - 1) {
    echo $i . ' ';
}

?><br><br>

// 12-vazifa<br>

<?php

$N = 12;
$sum = 0;

do {
    $lastDigit = $N % 10;
    $N = floor($N / 10);
} while ($N > 0);

$sum = $firstDigit + $lastDigit;

echo "Birinchi va oxirgi raqamlar yig'indisi: " . $sum;

?><br><br>


// 13-vazifa<br>

<?php

$N = 23456789;

$numberWords = array("nol", "bir", "ikki", "uch", "to'rt", "besh", "olti", "yetti", "sakkiz", "to'qqiz");

while ($N > 0) {
    $digit = $N % 10;
    echo $numberWords[$digit] . " ";
    $N = floor($N / 10);
}

?><br><br>