<?php
session_start();
$cart = $_SESSION["cart"] ?? [];
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Giỏ hàng</title>
</head>
<body>
    <h2>Giỏ hàng của bạn</h2>

    <?php if (empty($cart)): ?>
        <p>Giỏ hàng trống.</p>
    <?php else: ?>
        <table border="1" cellpadding="8">
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Hành động</th>
            </tr>
            <?php $total = 0; foreach ($cart as $index => $item): 
                $subtotal = $item["price"] * $item["quantity"];
                $total += $subtotal;
            ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= htmlspecialchars($item["name"]) ?></td>
                <td><?= number_format($item["price"]) ?> đ</td>
                <td><?= $item["quantity"] ?></td>
                <td><?= number_format($subtotal) ?> đ</td>
                <td><a href="remove_from_cart.php?index=<?= $index ?>">Xóa</a></td>
            </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="4"><strong>Tổng cộng</strong></td>
                <td colspan="2"><strong><?= number_format($total) ?> đ</strong></td>
            </tr>
        </table>
    <?php endif; ?>

    <br>
    <a href="add_to_cart.html">Thêm sản phẩm</a> |
    <a href="clear_cart.php">Xóa toàn bộ giỏ hàng</a>
</body>
</html>
