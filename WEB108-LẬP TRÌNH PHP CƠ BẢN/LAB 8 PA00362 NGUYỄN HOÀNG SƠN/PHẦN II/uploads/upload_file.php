<?php
$targetDir = "uploads/";

// Kiểm tra có file được gửi không
if (isset($_FILES["uploaded_file"]) && $_FILES["uploaded_file"]["error"] == 0) {
    $fileName = basename($_FILES["uploaded_file"]["name"]);
    $targetFile = $targetDir . $fileName;

    // Có thể thêm kiểm tra loại file, dung lượng...

    if (move_uploaded_file($_FILES["uploaded_file"]["tmp_name"], $targetFile)) {
        echo "<p>✅ Tập tin đã được tải lên thành công!</p>";
        echo "Tên file: <strong>$fileName</strong><br>";
        echo "<a href='$targetFile' target='_blank'>Xem file</a><br>";
    } else {
        echo "<p style='color:red;'>❌ Lỗi khi tải file lên!</p>";
    }
} else {
    echo "<p style='color:red;'>Vui lòng chọn file hợp lệ để tải lên.</p>";
}

echo "<br><a href='upload_form.html'>Quay lại form</a>";
?>
