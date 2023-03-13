<?php
// 以下の式の値を計算してください。
// 1×2÷3+4×5÷6+7×8÷9+⋯+10099×10100÷10101
// PHP


$num = 1;
$num1 = [];
$num2 = [];
$num3 = [];
$i = 0;
$sum = 0;
$sum2 = 0;

while ($num <= 10101) {
  if ($num % 3 == 1) {
    $num1[] = $num;
  } elseif ($num % 3 == 2) {
    $num2[] = $num;
  } elseif ($num % 3 == 0) {
    $num3[] = $num;
  }
  $num++;
}


while ($i <= 3366) {
  $sum = $num1[$i] * $num2[$i] / $num3[$i];
  $sum2 = $sum2 + $sum;
  $i++;
}
echo $sum2 .PHP_EOL;