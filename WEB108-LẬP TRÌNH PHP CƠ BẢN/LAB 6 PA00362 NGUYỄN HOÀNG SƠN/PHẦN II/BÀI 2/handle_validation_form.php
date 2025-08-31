<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $errors = [];

    // Kiểm tra rỗng
    if (empty($name)) {
        $errors[] = "Họ tên không được để trống.";
    }

    if (empty($email)) {
        $errors[] = "Email không được để trống.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email không hợp lệ.";
    }

    // Hiển thị kết quả
    if (!empty($errors)) {
        echo "<h3>Lỗi xác thực:</h3><ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul><a href='validation_form.html'>Quay lại</a>";
    } else {
        echo "<h2>Thông tin hợp lệ</h2>";
        echo "Họ tên: <strong>" . htmlspecialchars($name) . "</strong><br>";
        echo "Email: <strong>" . htmlspecialchars($email) . "</strong><br>";
    }
} else {
    echo "Vui lòng gửi dữ liệu từ biểu mẫu.";
}
?>
