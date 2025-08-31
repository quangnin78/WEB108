<?php
// Dữ liệu mẫu
$students = [
    [
        "id" => 1,
        "name" => "Nguyễn Hoàng Sơn",
        "grades" => [9, 10, 8]
    ],
    [
        "id" => 2,
        "name" => "Trần Văn Minh",
        "grades" => [6, 5, 7]
    ],
    [
        "id" => 3,
        "name" => "Lê Thị Lan",
        "grades" => [8, 9, 9]
    ]
];

// 1. Thêm sinh viên mới
function addStudent(&$students, $id, $name, $grades) {
    $students[] = [
        "id" => $id,
        "name" => $name,
        "grades" => $grades
    ];
}

// 2. Xóa sinh viên theo ID
function deleteStudentById(&$students, $id) {
    foreach ($students as $index => $student) {
        if ($student["id"] == $id) {
            unset($students[$index]);
        }
    }
}

// 3. Tìm sinh viên theo tên
function findStudentByName($students, $name) {
    $results = [];
    foreach ($students as $student) {
        if (strtolower($student["name"]) === strtolower($name)) {
            $results[] = $student;
        }
    }
    return $results;
}

// 4. Tính điểm trung bình
function calculateAverage($grades) {
    return count($grades) ? array_sum($grades) / count($grades) : 0;
}

// 5. Lấy sinh viên có điểm TB lớn hơn giá trị cho trước
function getStudentsAbove($students, $threshold) {
    $result = [];
    foreach ($students as $student) {
        $avg = calculateAverage($student["grades"]);
        if ($avg > $threshold) {
            $result[] = $student;
        }
    }
    return $result;
}
?>

<!-- 6. Hiển thị danh sách sinh viên bằng HTML -->
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản lý Sinh viên</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin-bottom: 30px;
        }
        th, td {
            border: 1px solid #444;
            padding: 8px 12px;
            text-align: center;
        }
        h2 { color: darkblue; }
    </style>
</head>
<body>

<h2>Danh sách sinh viên</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Họ tên</th>
        <th>Điểm</th>
        <th>Trung bình</th>
    </tr>
    <?php foreach ($students as $sv): ?>
        <tr>
            <td><?= $sv["id"] ?></td>
            <td><?= $sv["name"] ?></td>
            <td><?= implode(", ", $sv["grades"]) ?></td>
            <td><?= round(calculateAverage($sv["grades"]), 2) ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<h3>Sinh viên có điểm trung bình > 8</h3>
<ul>
<?php
$highScorers = getStudentsAbove($students, 8);
if (empty($highScorers)) {
    echo "<li>Không có sinh viên nào.</li>";
} else {
    foreach ($highScorers as $sv) {
        echo "<li>{$sv['name']} (ID: {$sv['id']}) - Trung bình: " . round(calculateAverage($sv["grades"]), 2) . "</li>";
    }
}
?>
</ul>

</body>
</html>
