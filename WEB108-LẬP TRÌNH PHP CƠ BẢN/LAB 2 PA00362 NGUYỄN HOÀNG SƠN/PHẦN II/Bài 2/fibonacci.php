<?php
// Khai báo hằng số xác định số lượng số Fibonacci cần kiểm tra
define("MAX_FIBONACCI", 20);       // Số lượng số Fibonacci cần tạo
define("DIVISOR", 5);              // Số để kiểm tra chia hết

// Khởi tạo hai số đầu tiên trong dãy Fibonacci
$fib1 = 0;
$fib2 = 1;
$count = 0;

echo "Dãy Fibonacci (tối đa " . MAX_FIBONACCI . " số):<br>";

do {
    // Hiển thị số hiện tại
    echo $fib1 . " ";

    // Kiểm tra nếu chia hết cho DIVISOR thì dừng vòng lặp
    if ($fib1 != 0 && $fib1 % DIVISOR == 0) {
        echo "<br>=> Số Fibonacci " . $fib1 . " chia hết cho " . DIVISOR . ". Dừng lại.";
        break;
    }

    // Tính số Fibonacci tiếp theo
    $next = $fib1 + $fib2;
    $fib1 = $fib2;
    $fib2 = $next;

    $count++;
} while ($count < MAX_FIBONACCI);
?>
