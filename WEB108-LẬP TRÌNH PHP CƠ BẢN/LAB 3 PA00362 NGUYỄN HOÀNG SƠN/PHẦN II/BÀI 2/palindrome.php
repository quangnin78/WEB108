<?php
// Hàm kiểm tra chuỗi có phải là từ đối xứng không
function isPalindrome($str) {
    // Loại bỏ khoảng trắng và chuyển về chữ thường
    $cleanStr = strtolower(str_replace(' ', '', $str));

    // So sánh với chuỗi đảo ngược
    if ($cleanStr === strrev($cleanStr)) {
        echo "\"$str\" là từ đối xứng.<br>";
    } else {
        echo "\"$str\" không phải là từ đối xứng.<br>";
    }
}

// Gọi hàm với các ví dụ
isPalindrome("madam");
isPalindrome("racecar");
isPalindrome("hello");
isPalindrome("A man a plan a canal Panama"); // vẫn là palindrome nếu bỏ khoảng trắng và không phân biệt hoa thường
?>
