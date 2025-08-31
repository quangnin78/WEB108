<?php
// Định nghĩa hàm tính tổng 3 số
function sumThreeNumbers($a, $b, $c) {
    $sum = $a + $b + $c;
    return $sum;
}

// Gọi hàm với các bộ số khác nhau
echo "Tổng của 1, 2, 3 là: " . sumThreeNumbers(1, 2, 3) . "<br>";
echo "Tổng của 10, 20, 30 là: " . sumThreeNumbers(10, 20, 30) . "<br>";
echo "Tổng của 5, 7, 9 là: " . sumThreeNumbers(5, 7, 9) . "<br>";
?>
