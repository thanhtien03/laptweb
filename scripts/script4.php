<?php
function giaiPhuongTrinhBacHai($a, $b, $c)
{
    $phuongtrinhbac2 = $b * $b - 4 * $a * $c;

    if ($phuongtrinhbac2 < 0) {
        return "Phương trình không nghiệm";
    } elseif ($phuongtrinhbac2 == 0) {
        $x = -$b / (2 * $a);
        return "Phương trình có nghiệm x = $x";
    } else {
        $x1 = (-$b + sqrt($phuongtrinhbac2)) / (2 * $a);
        $x2 = (-$b - sqrt($phuongtrinhbac2)) / (2 * $a);
        return "phuong trinh co nghiem: x1 = $x1 và x2 = $x2";
    }
}
    $a = 10;
    $b = 20;
    $c = -30;
$result = giaiPhuongTrinhBacHai($a, $b, $c);
echo $result;
?>