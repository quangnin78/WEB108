<?php
// Hàm đếm số lần xuất hiện của một từ trong đoạn văn bản
function countWordOccurrences($text, $word) {
    // Chuyển tất cả về chữ thường để đếm không phân biệt hoa thường
    $text = strtolower($text);
    $word = strtolower($word);

    // Tách chuỗi thành mảng từ
    $words = str_word_count($text, 1);

    // Dùng hàm array_count_values để đếm
    $counts = array_count_values($words);

    // Trả về số lần xuất hiện hoặc 0 nếu không có
    return $counts[$word] ?? 0;
}

// Đoạn văn bản mẫu
$paragraph = "PHP là một ngôn ngữ lập trình. PHP rất phổ biến. Nhiều lập trình viên chọn PHP.";

// Từ cần đếm
$searchWord = "PHP";

// Gọi hàm
$count = countWordOccurrences($paragraph, $searchWord);

// Hiển thị kết quả
echo "<strong>Đoạn văn bản:</strong><br>$paragraph<br><br>";
echo "Từ <strong>\"$searchWord\"</strong> xuất hiện <strong>$count</strong> lần.";
?>
