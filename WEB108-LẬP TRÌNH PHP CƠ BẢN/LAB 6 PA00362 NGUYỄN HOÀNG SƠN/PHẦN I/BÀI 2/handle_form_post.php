<?php
// Kiểm tra xem form có được gửi bằng POST không
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu và xử lý an toàn
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);

    echo "<h2>Thông tin bạn vừa nhập:</h2>";
    echo "Họ tên: <strong>$name</strong><br>";
    echo "Email: <strong>$email</strong><br>";
} else {
    echo "Vui lòng gửi dữ liệu từ biểu mẫu.";
}
?>
