// 1-vazifa<br>

<?php

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

?><br><br>

// 2-vazifa<br>

<?php

$numbers = array(5, 10, 15, 20, 25);
$sum = 0;

for ($i = 0; $i < count($numbers); $i++) {
    $sum += $numbers[$i];
}

echo "Raqamlar yig'indisi: " . $sum;

?><br><br>

// 3-vazifa<br>

<?php

$numbers1 = array(2, 3, 4, 5);
$product = 1;

for ($i = 0; $i < count($numbers1); $i++) {
    $product *= $numbers1[$i];
}

echo "Raqamlar ko'paytmasi: " . $product;

?><br><br>

// 4-vazifa<br>

<?php

$numbers = array(1, 2, 3, 4, 5, 6);
$sum = 0;
for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] % 2 == 0) {
        $sum += $numbers[$i];
    }
}

echo "juft raqamlar yig'indisi: " . $sum;

?><br><br>

// 5-vazifa<br>

<?php

$numbers = array(5, 10, 15, 20, 25);
$sum = 0;

for ($i = 0; $i < count($numbers); $i++) {
    $sum += $numbers[$i];
}

echo "Raqamlar yig'indisi: " . $sum;

?><br><br>

// 6-vazifa<br>

<?php

$N = 1; // Başlangıç değeri
$M = 20; // Bitiş değeri
$sum = 0; // Toplamı tutacak değişken

for ($i = $N; $i <= $M; $i++) {
    if ($i % 4 == 0) {
        $sum += $i;
    }
}

echo "4 karrali sonlar yig'indisi: " . $sum;


?><br><br>

// 7-vazifa<br>
<?php

$numbers = array(2, 3, 4, 5, 6, 7, 8);
$count = 0;

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] % 2 == 0) {
        $count++;
    }
}

echo "Juft sonlar soni: " . $count;

?><br><br>

// 8-vazifa<br>

<?php

for ($i = 10; $i >= 1; $i = $i - 1) {
    echo $i;
}

?><br><br>

// 9-vazifa<br>

<?php
// for
$text = "Mehribon dunyo";
$count = 0;

for ($i = 0; $i < strlen($text); $i++) {
    if ($text[$i] == 'r') {
        $count++;
    }
}

echo "Matndagi 'r' harfi soni: " . $count;
echo '<br>';

//while
$text = "Mehribon dunyo";
$count = 0;
$i = 0;

while ($i < strlen($text)) {
    if ($text[$i] == 'r') {
        $count++;
    }
    $i++;
}

echo "Matndagi 'r' harfi soni: " . $count;

?><br><br>

// 10-vazifa<br>

<?php

$text = "Salom";
$reverse = "";

for ($i = strlen($text) - 1; $i >= 0; $i--) {
    $reverse .= $text[$i];
}

echo "Matinning teskarisi: " . $reverse;

?><br><br>

// 11-vazifa<br>

<?php

$N = 5;
$total = 0;
$number = 1;

for ($i = 0; $i < $N; $i++) {
    $total += $number;
    $number = $number * 10 + 1;
}

echo "Toplam: " . $total;

?><br><br>

// 12-vazifa<br><br>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <table border="1">
            <tr>
                <th></th>
                <?php
                for ($h = 1; $h <= 12; $h++) {
                    echo '<th>' . $h . '</th>';
                }
                ?>
            </tr>
            <?php
            for ($i = 1; $i <= 12; $i++) {
                echo '<tr>
                        <th>'.$i.'</th> ';
                for ($j = 1; $j <= 12; $j++) {
                    $product = $i * $j;
                    echo "<td>".$product."</td>";
                }
            }
            ?>
        </table>
    </div>
</body>

</html>
<br><br>

// 13-vazifa<br>

<?php

for ($i = 1; $i <= 5; $i++) {
    echo "*";
}
echo "<br>";
for ($i = 1; $i <= 5; $i++) {
    echo " * <br>";
}

for ($i = 1; $i <= 5; $i++) {
    echo "*";
}

?><br><br>

<?php

for ($i = 0; $i < 5; $i++){
    for(; $i < 5; $i++)
    print "i";
}

// $height = 3;

// for ($i = 1; $i <= $height; $i++){
//     for ($j = 1; $j <= $height - $i; $j++){
//         echo " ";
//     }
//     for ($k = 1; $k <= 2 * $i - 1; $k++){
//         echo "*";
//     }
//     echo "\n";
// }

// for ($i=1; $i<=10;$i++){
//     for($b=1;$b <= 5;$b++){
//         print "Hello world";
//     }
// }

// for ($count = 1; $count != 20; $count++){
//     print $count;
//     $count++;
// }

// for ($i = 0; -5; $i++){
//     print $i;
//     if($i == 3)
//     break;
// }

// $i = 0;
// while($i = 10){
//     print "hello";
// }
// print "world";


// $num = 2;

// do {
//     $num += 2;
//     echo $num, "\n";
// }while (false);

// while (--$i > 0){
//     $i++; print $i;
// }

// $num = 20;

// while ($num < 12){
//     $num += 2;
//     echo $num, "\n";
// }
// for ($count = 0; $count < 3; $count++){
//     print "hello".PHP_EOL;
//     print false.PHP_EOL;
//     print "world".PHP_EOL;
// }
?>