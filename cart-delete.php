<?php require 'header.php'; ?>
<?php require_once 'config.php'; ?>
<?php
unset($_SESSION['product'][$_REQUEST['id']]);
echo 'カートから商品を削除しました。';
echo '<hr>';
require 'cart.php';
?>
<?php require 'footer.php'; ?>