<?php
  // Toán tử số học
  $a = 10;
  $b = 3;

  echo "<h3>Toán tử số học:</h3>";
  echo "a + b = " . ($a + $b) . "<br>";
  echo "a - b = " . ($a - $b) . "<br>";
  echo "a * b = " . ($a * $b) . "<br>";
  echo "a / b = " . ($a / $b) . "<br>";
  echo "a % b = " . ($a % $b) . "<br>";

  // Toán tử so sánh
  echo "<h3>Toán tử so sánh:</h3>";
  echo "a == b: " . var_export($a == $b, true) . "<br>";
  echo "a != b: " . var_export($a != $b, true) . "<br>";
  echo "a > b: " . var_export($a > $b, true) . "<br>";
  echo "a < b: " . var_export($a < $b, true) . "<br>";
  echo "a >= b: " . var_export($a >= $b, true) . "<br>";
  echo "a <= b: " . var_export($a <= $b, true) . "<br>";

  // Toán tử logic
  $x = true;
  $y = false;

  echo "<h3>Toán tử logic:</h3>";
  echo "x && y: " . var_export($x && $y, true) . "<br>";
  echo "x || y: " . var_export($x || $y, true) . "<br>";
  echo "!x: " . var_export(!$x, true) . "<br>";
?>
