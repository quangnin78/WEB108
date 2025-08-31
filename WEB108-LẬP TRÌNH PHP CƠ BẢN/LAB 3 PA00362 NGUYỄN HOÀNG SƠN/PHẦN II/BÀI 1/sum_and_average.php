<?php
// Hàm tính tổng và trung bình
function calculateSumAndAverage($numbers, $defaultValue = 0) {
    // Kiểm tra nếu mảng rỗng
    if (empty($numbers)) {
        echo "Danh sách rỗng. Tổng = $defaultValue, Trung bình = $defaultValue<br>";
        return;
    }

    // Tính tổng
    $sum = array_sum($numbers);

    // Tính trung bình
    $average = $sum / count($numbers);

    // Hiển thị kết quả
    echo "Danh sách: " . implode(", ", $numbers) . "<br>";
    echo "Tổng = $sum<br>";
    echo "Trung bình = $average<br><br>";
}

// Gọi hàm với các mảng khác nhau
calculateSumAndAverage([10, 20, 30, 40, 50]);
calculateSumAndAverage([]); // Trường hợp mảng rỗng
?>
