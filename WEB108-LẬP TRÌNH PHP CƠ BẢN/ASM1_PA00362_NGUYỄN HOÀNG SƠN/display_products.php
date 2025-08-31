<?php
session_start();
$products = isset($_SESSION['products']) ? $_SESSION['products'] : [];
?>

<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Danh Sách Sản Phẩm</title>
  <style>
    body {
      font-family: Arial;
      background: #f9f9f9;
      padding: 20px;
    }
    h2 {
      text-align: center;
    }
    .product-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }
    .product {
      background: white;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 220px;
      text-align: center;
      padding: 15px;
    }
    .product img {
      max-width: 100%;
      height: 150px;
      object-fit: contain;
    }
    .product h4 {
      margin: 10px 0 5px;
    }
    .product p {
      margin: 0 0 10px;
      font-size: 14px;
    }
    .add-button {
      display: block;
      margin: 30px auto;
      padding: 10px 20px;
      font-size: 16px;
      background: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-decoration: none;
      text-align: center;
      width: 200px;
    }
  </style>
</head>
<body>
  <h2>DANH SÁCH SẢN PHẨM</h2>
  
  <div class="product-container">
    <?php if (count($products) > 0): ?>
      <?php foreach ($products as $product): ?>
        <div class="product">
          <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
          <h4><?= htmlspecialchars($product['name']) ?></h4>
          <p>Giá: <?= number_format($product['price'], 0, ',', '.') ?> VND</p>
          <p><?= htmlspecialchars($product['description']) ?></p>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <p>Không có sản phẩm nào.</p>
    <?php endif; ?>
  </div>

  <a href="add_product_form.php" class="add-button">Thêm Sản Phẩm</a>
</body>
</html>
