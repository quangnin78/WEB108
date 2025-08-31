<?php
// Khai báo hằng số số lượng số nguyên tố cần tìm
define("TOTAL_PRIMES", 10);

// Mảng để lưu các số nguyên tố
$primes = [];

// Hàm kiểm tra số nguyên tố
function isPrime($number) {
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

// Biến đếm và kiểm tra
$number = 2;

while (true) {
    if (isPrime($number)) {
        $primes[] = $number;
    }

    // Dừng vòng lặp khi đã tìm đủ số nguyên tố
    if (count($primes) >= TOTAL_PRIMES) {
        break;
    }

    $number++;
}

// Hiển thị kết quả
echo "Danh sách " . TOTAL_PRIMES . " số nguyên tố đầu tiên là:<br>";
echo implode(", ", $primes);
?>
