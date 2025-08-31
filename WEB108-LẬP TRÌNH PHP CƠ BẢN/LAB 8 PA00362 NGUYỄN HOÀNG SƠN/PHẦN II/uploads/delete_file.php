<?php
if (isset($_GET["filename"])) {
    $file = "uploads/" . basename($_GET["filename"]);

    if (file_exists($file)) {
        unlink($file);
        echo "<p>✅ Đã xóa tập tin: <strong>" . htmlspecialchars($_GET["filename"]) . "</strong></p>";
    } else {
        echo "<p style='color:red;'>❌ Tập tin không tồn tại!</p>";
    }
} else {
    echo "<p style='color:red;'>Không có tên tập tin được cung cấp.</p>";
}

echo "<br><a href='upload_form.html'>Quay lại form</a>";
?>
