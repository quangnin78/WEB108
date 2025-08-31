<?php
// Kiểm tra nếu chưa có cookie thì không cho vào
if (!isset($_COOKIE["username"])) {
    header("Location: login.html");
    exit;
}

$username = htmlspecialchars($_COOKIE["username"]);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chào mừng</title>
</head>
<body>
    <h2>Xin chào, <?= $username ?>!</h2>
    <p>Bạn đã đăng nhập thành công.</p>
    <a href="logout.php">Đăng xuất</a>
</body>
</html>
