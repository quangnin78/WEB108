<?php
// Kiểm tra xem dữ liệu có được gửi qua GET không
if (isset($_GET["name"]) && isset($_GET["email"])) {
    $name = htmlspecialchars($_GET["name"]);
    $email = htmlspecialchars($_GET["email"]);

    echo "<h2>Thông tin bạn vừa nhập:</h2>";
    echo "Họ tên: <strong>$name</strong><br>";
    echo "Email: <strong>$email</strong><br>";
} else {
    echo "Không có dữ liệu được gửi!";
}
?>
