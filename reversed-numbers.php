<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $string = $_GET['string'];
  $result = '';
  $number = '';
  for ($i = 0; $i < strlen($string); $i++) {
    $char = $string[$i];
    if (is_numeric($char)) {
      // accumulate digits of number
      $number .= $char;
    } else {
      // append reversed number to result and reset
      $result .= strrev($number) . $char;
      $number = '';
    }
  }
  // append final reversed number to result
  $result .= strrev($number);
  echo $result;
} else {
  echo "Please use a GET request with the 'string' parameter";
}
?>
<!-- http://localhost/php-trip-api/reversed-numbers.php?string=sana123rayes729 -->