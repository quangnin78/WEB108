<?php
// Biến toàn cục
$websiteName = "FPT Polytechnic";

// Hàm chào mừng người dùng
function greetUser($name = "Thanh Hoá") {
    // Khai báo sử dụng biến toàn cục bên trong hàm
    global $websiteName;

    // Biến cục bộ
    $message = "Chào mừng $name đến với $websiteName!";
    
    // Hiển thị lời chào
    echo $message . "<br>";
}

// Gọi hàm với tên cụ thể
greetUser("Nguyễn Hoàng Sơn");

// Gọi hàm không truyền tên (dùng giá trị mặc định)
greetUser();
?>
