<?php
// Xử lý khi người dùng gửi form
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"] ?? "");
    $password = trim($_POST["password"] ?? "");

    // Đơn giản: xác thực username và password cố định
    if ($username === "admin" && $password === "123") {
        // Thiết lập cookie trong 1 giờ (3600 giây)
        setcookie("username", $username, time() + 3600);

        // Điều hướng tới trang chào mừng
        header("Location: welcome.php");
        exit;
    } else {
        echo "<p style='color:red;'>Tên đăng nhập hoặc mật khẩu sai!</p>";
        echo "<a href='login.html'>Thử lại</a>";
    }
} else {
    echo "Vui lòng đăng nhập từ form.";
}
?>
