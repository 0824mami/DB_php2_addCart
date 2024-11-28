<?php require 'header.php'; ?>
<?php
try {
	$pdo = new PDO(
		##
		[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,]
	);
	// echo '<p>接続成功</p>';  //このタグがhtmlに差し込まれる
	// echo "\n";
	$dbh = null;
} catch (PDOException $e) {
	echo '接続失敗' . $e->getMessage();
	exit();
};

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// var_dump($pdo);
?>
<?php require 'footer.php'; ?>
