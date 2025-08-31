<?php
session_start();

// Kiểm tra và xử lý upload ảnh
$target_dir = "uploads/";
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true);
}

$image_name = basename($_FILES["image"]["name"]);
$unique_name = time() . "_" . $image_name;
$target_file = $target_dir . $unique_name;

if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    // Tạo mảng sản phẩm mới
    $product = [
        "id" => time(),
        "name" => $_POST["name"],
        "price" => $_POST["price"],
        "description" => $_POST["description"],
        "image" => $target_file
    ];

    // Lưu vào SESSION
    if (!isset($_SESSION["products"])) {
        $_SESSION["products"] = [];
    }

    $_SESSION["products"][] = $product;

    // Chuyển hướng về trang danh sách
    header("Location: display_products.php");
    exit();
} else {
    echo "Lỗi upload ảnh!";
}
?>
