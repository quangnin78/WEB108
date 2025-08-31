<?php
// Khai báo hằng số giới hạn trên
define("LIMIT", 100); // bạn có thể thay 100 bằng số khác nếu muốn

// Biến lưu tổng
$sum = 0;

// Duyệt từ 1 đến giới hạn
for ($i = 1; $i <= LIMIT; $i++) {
    // Nếu là số chẵn thì bỏ qua
    if ($i % 2 == 0) {
        continue;
    }

    // Cộng số lẻ vào tổng
    $sum += $i;
}

// Hiển thị kết quả
echo "Tổng các số lẻ từ 1 đến " . LIMIT . " là: " . $sum;
?>
