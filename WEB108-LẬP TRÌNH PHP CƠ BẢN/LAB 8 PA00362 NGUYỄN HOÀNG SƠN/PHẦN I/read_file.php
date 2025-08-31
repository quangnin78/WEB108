<?php
$filename = "sample.txt";

// Kiểm tra xem file có tồn tại không
if (file_exists($filename)) {
    // Đọc toàn bộ nội dung file
    $content = file_get_contents($filename);

    echo "<h2>Nội dung trong file sample.txt:</h2>";
    echo "<pre>$content</pre>"; // <pre> để giữ định dạng dòng
} else {
    echo "<p style='color:red;'>File không tồn tại!</p>";
}
?>
