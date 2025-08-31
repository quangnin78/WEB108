<?php
// Hàm thay thế từ trong đoạn văn bản
function replaceWord($text, $wordToFind, $replacement) {
    // Sử dụng str_replace để thay thế từ
    $newText = str_replace($wordToFind, $replacement, $text);
    return $newText;
}

// Đoạn văn bản mẫu
$paragraph = "PHP là một ngôn ngữ lập trình kịch bản phía máy chủ. PHP rất phổ biến và được sử dụng rộng rãi.";

// Gọi hàm để thay thế
$replacedParagraph = replaceWord($paragraph, "PHP", "Python");

// Hiển thị kết quả
echo "<strong>Đoạn văn bản gốc:</strong><br>$paragraph<br><br>";
echo "<strong>Đoạn văn bản sau khi thay thế:</strong><br>$replacedParagraph";
?>
