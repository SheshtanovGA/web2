<?php
/* Доступ по ссылке
Вы унаследовали код от другого разработчика. Вы не можете изменить их код, но вам необходимо добавить некоторые дополнительные функции. Вместо использования переменной $very_bad_unclear_name, как в вашей части кода. Объявите новую переменную $order как ссылку на переменную $very_bad_unclear_name.
С помощью оператора конкатенации добавьте к переменной $order любую строку.
Распечатайте $very_bad_unclear_name */
/* Imagine a lot of code here */ 
$very_bad_unclear_name = "15 chicken wings";
// Write your code here:
$order =& $very_bad_unclear_name;
$order .= " that you dont even want but still gonna consume regardless";
// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

/* task 2 */
$ll = 42;
echo "$\n\n$ll\n";
$ld = 4.20;
echo "$ld\n";

echo $ll-30 . "\n";

$last_month = 1187.23;
$this_month = 1089.98;
echo $last_month - $this_month . "\n\n";

/* task 11 */
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $num_languages . "\n\n";

/* task 12 */
echo 8 ** 2 . "\n\n";

/* task 13 */
$my_num = 42;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -=2;
$answer /=2;
$answer -= $my_num;
echo "$answer\n\n";

/* task 14 */
// a mod b
$a = 10;
$b = 3;
echo $a % $b . "\n";
// divisible -> result, divisible with remaider -> remainder
$a = 1001;
$b = 77;
echo ($a % $b == 0) ? ("Делится " . $a / $b . "\n") : ("Делится с остатком " . $a % $b . "\n");
// assign st 2^10
$st = 2**10;
// self explanotary
echo "sqrt(245) = " . sqrt(245) . "\n";
// euclidian distance
$a = array(4, 2, 5, 19, 13, 0, 10);
$t = 0;
foreach ($a as $e) {
    $t += $e*$e;
}
echo sqrt($t) . "\n";
// rounding to 0th, 1st, 2nd digits
echo round(sqrt(379)) . " " . round(10*sqrt(379))/10 . " " . round(100*sqrt(379))/100 . "\n";
// assotiative array
$t = sqrt(587);
$ans = [ 'floor' => floor($t), 'ceil' => ceil($t)];
// array min, max
$a = array(4, -2, 5, 19, -120, 0, 10);
echo min($a) . " " . max($a) . "\n";
// random int
echo rand(1, 100) . "\n";
// array of random int
$a = [];
for ($i = 0; $i < 10; $i++) {
    $a[] = rand(1, 100);
}
for ($i = 0; $i < 10; $i++) {
    echo $a[$i] . " ";
}
// abs difference
$a = 7;
$b = 9;
echo "\n" . abs($a - $b) . "\n";
$a = 10;
$b = 1;
echo abs($a - $b) . "\n";
// abs array
$a = array(1, 2, -1, -2, 3, -3);
for ($i = 0; $i < count($a); $i++) {
    $a[$i] = abs($a[$i]);
    echo $a[$i] . " ";
}
echo "\n";
// divisors array by given number
$x = 30;
function divisors($n) {
    $divisors = [];
    for ($i = 1; $i * $i <= $n; $i++) {
        if ($n % $i == 0) {
            $divisors[] = $i;
            if ($i * $i != $n) {
                $divisors[] = $n / $i;
            }
        }
    }
    sort($divisors);
    return $divisors;
}
$divisors = divisors($x);
foreach ($divisors as $e) {
    echo $e . " ";
}
echo "\n";
// find when sum exceeds 10
$a = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$prefixsum = []; // im deliborately overcomplicating this (same O(n))
$prefixsum[] = 0;
for ($i = 0; $i < count($a); $i++) {
    $prefixsum[] = $prefixsum[$i] + $a[$i];
} 
function binsearch($arr, $val) { 
    // smth like std::upper_bound
    $low = 0;
    $high = count($arr);
    while ($low < $high) {
        $mid = (int)(($low + $high) / 2);
        if ($arr[$mid] <= $val) {
            $low = $mid + 1;
        } else {
            $high = $mid;
        }
    }
    return $low-1;
}
echo "sum >= 10 at index " . binsearch($prefixsum, 10) . "\n\n";

/* task 15 */ 
$s = "hello world";
function printStringReturnNumber($s) {
    echo $s . "\n";
    // return number wasn't specifyed, so i return primitive hash
    $n = 0;
    for ($i = 0; $i < strlen($s); ++$i) {
        $n += ord($s[$i]); // character ASCII value
    }
    return $n;
}
$my_num = printStringReturnNumber($s);
echo $my_num . "\n\n";

/* task 16 */
function increaseEnthusiasm($s) {
    return $s . "!";
}
echo increaseEnthusiasm("hello world") . "\n";
function repeatThreeTimes($s) {
    $tempstr = "";
    for ($i = 0; $i < 3; $i++) {
        $tempstr .= $s;
    }
    return $tempstr;
}
echo repeatThreeTimes("6e") . "\n";
echo increaseEnthusiasm(repeatThreeTimes("6e")) . "\n";
function cut($str, $n = 10) {
    return substr($str, 0, $n);
}
echo "substrings: " .  cut("12345678900") . " " . cut("12345678900", 4) . "\n";
// iterate over array recursively
$a = array(1, 2, 3, 4, 5, 6, 7, 8);
function printarr($a, $i = 0) {
    if ($i == count($a)) { echo "\n";return;}
    echo $a[$i] . " ";
    printarr($a, $i+1);
}
printarr($a);
// assign sum of the digits while n > 9;
function reducetodigsum($x) {
    if ($x <= 9) return $x;
    $t = $x;
    $sum = 0;
    while ($t > 0) {
        $sum += $t % 10;
        $t /= 10;
    }
    return reducetodigsum($sum);
}
echo reducetodigsum(998) . "\n\n"; // 998 -> 26 -> 8

?>