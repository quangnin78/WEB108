<?php
// Hủy cookie
setcookie("username", "", time() - 3600); // Thiết lập hết hạn
header("Location: login.html");
exit;
