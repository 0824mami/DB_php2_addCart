<?php require 'header.php'; ?>
<?php require_once 'config.php'; ?>
<form action="allpro.php" method="post">
	商品検索
	<input type="text" name="keyword">
	<input type="submit" value="検索">
</form>
<table>
	<tr>
		<th>商品番号</th>
		<th>商品名</th>
		<th>価格</th>
	</tr>
	<?php
	if (isset($_REQUEST['keyword'])) {
		$sql = $pdo->prepare('select * from product where name like ?');
		$sql->execute(['%' . $_REQUEST['keyword'] . '%']);
	} else {
		$sql = $pdo->prepare('select * from product');
		$sql->execute([]);
	}
	foreach ($sql as $row) {
		$id = $row['id'];
		echo '<tr>';
		echo '<td>', $id, '</td>';
		echo '<td>';
		echo '<a href="detail.php?id=', $id, '">', $row['name'], '</a>';
		echo '</td>';
		echo '<td>', $row['price'], '</td>';
		echo '</tr>';
	}
	?>
</table>
<p><a href="edit3.php">編集リストを表示する</a></p>
<?php require 'footer.php'; ?>