<?php
// Khai báo mảng chỉ số
$students = ["Chiến", "Huy", "Linh", "Quân", "Tuấn"];

// Truy cập phần tử theo chỉ số
echo "Sinh viên đầu tiên: " . $students[0] . "<br>";
echo "Sinh viên cuối cùng: " . $students[count($students) - 1] . "<br><br>";

// Duyệt mảng bằng vòng lặp for
echo "<strong>Duyệt mảng bằng for:</strong><br>";
for ($i = 0; $i < count($students); $i++) {
    echo "[$i] => " . $students[$i] . "<br>";
}

echo "<br><strong>Duyệt mảng bằng foreach:</strong><br>";
// Duyệt mảng bằng foreach
foreach ($students as $index => $name) {
    echo "[$index] => $name<br>";
}

echo "<br><strong>Sử dụng một số hàm xử lý mảng:</strong><br>";

// Đếm số phần tử
echo "Số lượng sinh viên: " . count($students) . "<br>";

// Sắp xếp tăng dần
sort($students);
echo "Mảng sau khi sắp xếp tăng dần: " . implode(", ", $students) . "<br>";

// Thêm phần tử mới vào cuối mảng
array_push($students, "Linh");
echo "Sau khi thêm 'Linh': " . implode(", ", $students) . "<br>";

// Xóa phần tử cuối mảng
array_pop($students);
echo "Sau khi xóa phần tử cuối: " . implode(", ", $students) . "<br>";
?>
