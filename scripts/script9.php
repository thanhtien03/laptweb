<?php
$arr = array(1, 5, 10, 2, 9, 45, 3, 7);
function isPrime($number)
{
    if ($number <= 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

foreach ($arr as $value) {
    if (isPrime($value)) {
        echo $value . ' ';
    }
}
?>
