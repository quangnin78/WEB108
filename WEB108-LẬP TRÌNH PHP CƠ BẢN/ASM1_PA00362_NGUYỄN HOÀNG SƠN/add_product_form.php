<?php
// add_product_form.php
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Thêm Sản Phẩm Mới</title>
  <link rel="stylesheet" href="products.css">
  <style>
    body {
      font-family: Arial;
      background: white;
      padding: 30px;
    }
    form {
      background: white;
      max-width: 500px;
      margin: auto;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
    }
    input[type="text"], input[type="number"], textarea {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }
    input[type="submit"] {
      background: #28a745;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background: #218838;
    }
  </style>
</head>
<body>
  <h2 style="text-align: center;">Thêm Sản Phẩm Mới</h2>
  <form action="add_product.php" method="post" enctype="multipart/form-data">
    <label for="name">Tên sản phẩm:</label>
    <input type="text" name="name" required>

    <label for="price">Giá:</label>
    <input type="number" name="price" required>

    <label for="description">Mô tả:</label>
    <textarea name="description" rows="4" required></textarea>

    <label for="image">Hình ảnh:</label>
    <input type="file" name="image" accept="image/*" required>

    <input type="submit" value="Thêm sản phẩm">
  </form>
</body>
</html>
