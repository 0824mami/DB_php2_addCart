<?php require 'header.php'; ?>
<?php require_once 'config.php'; ?>
<form action="product.php" method="post">
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
	foreach ($pdo->query('select * from product') as $row) {
		echo '<tr>';
		echo '<td>', htmlspecialchars($row['id']), '</td>';
		echo '<td>';
		echo '<a href="detail.php?id=', $id, '">', $row['name'], '</a>';
		echo '</td>';
		echo '<td>', htmlspecialchars($row['price']), '</td>';
		echo '</tr>';
		echo "<p>\n</p>";
	}
	?>
</table>
<p><a href="edit3.php">編集リストを表示する</a></p>
<?php require 'footer.php'; ?>