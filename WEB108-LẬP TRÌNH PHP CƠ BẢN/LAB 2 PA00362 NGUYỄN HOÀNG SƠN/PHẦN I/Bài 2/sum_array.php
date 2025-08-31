<?php
// Khai báo hằng số làm giới hạn trên
define("MAX_VALUE", 50);

// Khai báo mảng số nguyên
$numbers = [10, 25, 60, 45, 100, 30, 5];

// Biến lưu tổng các giá trị hợp lệ
$sum = 0;

// Duyệt từng phần tử trong mảng
foreach ($numbers as $value) {
    // Bỏ qua giá trị nếu lớn hơn giới hạn
    if ($value > MAX_VALUE) {
        continue;
    }

    // Cộng vào tổng nếu hợp lệ
    $sum += $value;
}

// Hiển thị kết quả
echo "Tổng các giá trị không vượt quá " . MAX_VALUE . " là: " . $sum;
?>
