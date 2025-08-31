<?php
// Khai báo chuỗi ban đầu
$text = "Xin chao FPT Polytechnic";

// Chuyển sang chữ hoa
echo "Chữ hoa: " . strtoupper($text) . "<br>";

// Chuyển sang chữ thường
echo "Chữ thường: " . strtolower($text) . "<br>";

// Thay thế chuỗi
$replaced = str_replace("FPT Polytechnic", "thế giới PHP", $text);
echo "Sau khi thay thế: " . $replaced . "<br>";

// Tách chuỗi thành mảng
$words = explode(" ", $text);
echo "Các từ trong chuỗi:<br>";
print_r($words);
?>
