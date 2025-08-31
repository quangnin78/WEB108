<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Danh Sách Sản Phẩm</title>
  <link rel="stylesheet" href="products.css">
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
      position: relative;
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
    .actions {
      display: flex;
      justify-content: space-around;
    }
    .actions a {
      padding: 5px 10px;
      text-decoration: none;
      border-radius: 4px;
      color: white;
      font-size: 13px;
    }
    .edit {
      background: #28a745;
    }
    .delete {
      background: #dc3545;
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
    }
  </style>
</head>
<body>
  <h2>DANH SÁCH SẢN PHẨM</h2>
  <div class="product-container">
    <div class="product">
      <img src="uploads/honor 90 lite 5G.jpg" alt="Honor 90 Lite">
      <h4>Honor 90 Lite 5G 8GB-256GB</h4>
      <p>Giá: 3,990,000 VND</p>
      <p>Mô tả: Honor 90 Lite 5G 8GB-256GB</p>
      <div class="actions">
        <a href="#" class="edit">Sửa</a>
        <a href="#" class="delete">Xóa</a>
      </div>
    </div>

    <div class="product-container">
    <div class="product">
      <img src="uploads/maytinh.jpg" alt="Máy Tính xách tay ">
      <h4>Máy Tính</h4>
      <p>Giá: 2,990,000 VND</p>
      <p>Mô tả: Máy Tính 250</p>
      <div class="actions">
        <a href="#" class="edit">Sửa</a>
        <a href="#" class="delete">Xóa</a>
      </div>
    </div>

    <div class="product-container">
    <div class="product">
      <img src="uploads/maytinhdell.jpg" alt="Máy Tính xách tay 2025">
      <h4>Máy Tính xách tay 2025</h4>
      <p>Giá: 1,990,000 VND</p>
      <p>Mô tả: Máy Tính 250</p>
      <div class="actions">
        <a href="#" class="edit">Sửa</a>
        <a href="#" class="delete">Xóa</a>
      </div>
    </div>



    

    

    
    
    
    <!-- Thêm sản phẩm khác tại đây -->
  </div>
  <a href="add_product_form.php" class="add-button">Thêm Sản Phẩm Mới</a>
</body>
</html>