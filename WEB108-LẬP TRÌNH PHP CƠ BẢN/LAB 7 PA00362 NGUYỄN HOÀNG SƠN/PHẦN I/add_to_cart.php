<?php
session_start();

// Kiểm tra nếu dữ liệu được gửi qua POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Lấy dữ liệu từ form
    $name = trim($_POST["name"] ?? "");
    $price = (float)($_POST["price"] ?? 0);
    $quantity = (int)($_POST["quantity"] ?? 1);

    // Kiểm tra dữ liệu hợp lệ
    if ($name === "" || $price <= 0 || $quantity <= 0) {
        echo "<p>Dữ liệu không hợp lệ. Vui lòng quay lại và nhập lại.</p>";
        echo "<a href='add_to_cart.html'>Quay lại</a>";
        exit;
    }

    // Khởi tạo sản phẩm
    $item = [
        "name" => $name,
        "price" => $price,
        "quantity" => $quantity
    ];

    // Thêm vào giỏ hàng (nếu chưa có thì tạo mảng trước)
    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = [];
    }

    $_SESSION["cart"][] = $item;

    // Phản hồi
    echo "<p> Sản phẩm đã được thêm vào giỏ hàng!</p>";
    echo "<ul>
            <li><strong>Tên:</strong> " . htmlspecialchars($name) . "</li>
            <li><strong>Giá:</strong> " . number_format($price) . " đ</li>
            <li><strong>Số lượng:</strong> $quantity</li>
          </ul>";
    echo "<a href='add_to_cart.html'>➕ Thêm sản phẩm khác</a><br>";
    echo "<a href='view_cart.php'>🛒 Xem giỏ hàng</a>";
} else {
    echo "Phương thức không hợp lệ.";
}
?>
