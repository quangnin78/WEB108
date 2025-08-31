<?php
// ===== MẢNG KẾT HỢP (Associative Array) =====
$student = [
    "name" => "Nguyễn Hoàng Sơn",
    "age" => 19,
    "major" => "Web Development"
];

// Truy cập phần tử trong mảng kết hợp
echo "<h3>Thông tin sinh viên:</h3>";
echo "Họ tên: " . $student["name"] . "<br>";
echo "Tuổi: " . $student["age"] . "<br>";
echo "Ngành học: " . $student["major"] . "<br>";

// Duyệt qua mảng kết hợp
echo "<h4>Duyệt mảng kết hợp:</h4>";
foreach ($student as $key => $value) {
    echo "$key: $value<br>";
}

echo "<hr>";

// ===== MẢNG ĐA CHIỀU (Multidimensional Array) =====
$students = [
    [
        "name" => "Chiến",
        "score" => 8.0
    ],
    [
        "name" => "Linh",
        "score" => 6.5
    ],
    [
        "name" => "Quân",
        "score" => 9.2
    ]
];

// Duyệt và hiển thị thông tin từ mảng đa chiều
echo "<h3>Danh sách sinh viên:</h3>";
foreach ($students as $index => $stu) {
    echo "SV " . ($index + 1) . ": " . $stu["name"] . " - Điểm: " . $stu["score"] . "<br>";
}

// ===== SỬ DỤNG HÀM XỬ LÝ MẢNG =====
echo "<hr><h4>Một số hàm xử lý mảng:</h4>";

// Lấy danh sách tên sinh viên
$names = array_column($students, "name");
echo "Tên các sinh viên: " . implode(", ", $names) . "<br>";

// Tìm điểm cao nhất
$maxScore = max(array_column($students, "score"));
echo "Điểm cao nhất: $maxScore<br>";

// Sắp xếp theo điểm tăng dần
usort($students, function($a, $b) {
    return $a["score"] <=> $b["score"];
});
echo "<br><strong>Danh sách sau khi sắp xếp theo điểm:</strong><br>";
foreach ($students as $stu) {
    echo $stu["name"] . " - " . $stu["score"] . "<br>";
}
?>
