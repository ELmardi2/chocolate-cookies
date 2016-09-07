<?php

setcookie('mardi', 'test', time() + (86400 * 30), "/"); // 86400 = 1 day
if (count($_COOKIE) > 0) {
  echo "ouiiiii";
}else {
  echo "non set SVP";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
if(!isset($_COOKIE['mardi'])) {
    echo "Cookie named '" . 'mardi' . "' is not set!";
} else {
    echo "Cookie '" . 'mardi' . "' is set!<br>";
    echo "Value is: " . $_COOKIE['mardi'];
}
?>
  </body>
</html>
