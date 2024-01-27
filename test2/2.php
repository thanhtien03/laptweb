<?php
$arr = [15, 25, 5, 7, 9, 4, 8, 10, 15];
$evenNumbers = array_filter($arr, function($number) {
    return $number % 2 == 0;
});
arsort($evenNumbers);
foreach ($arr as &$number) {
    if ($number % 2 == 0) {
        $number = array_shift($evenNumbers);
    }
}

echo implode(' ', $arr);
?>