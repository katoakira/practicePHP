<?php

	// データベースに接続
	function connectDatabase() {
		$link = mysql_connect('localhost', 'root', 'pc19930831A');
		if (!$link) {
			echo "データベースに接続できません。";
		}
		mysql_select_db('vegetable', $link);
		mysql_query('SET NAMES utf8', $link);

		return $link;
	}

	// データを取得
	function getVegetables() {
		$link = connectDatabase();
		$sql = "SELECT * FROM 
					categories,items 
				WHERE 
					categories.id = items.category_id
				ORDER BY
					categories.id";
		$result = mysql_query($sql);

	 	$vegetables = array();
	 	$count = mysql_num_rows($result);
	 	if ($result !== false && $count) {
	 		for ($i = 0; $i < $count, $vegetable = mysql_fetch_assoc($result); $i++) {
	 			$vegetables[] = $vegetable;
		 	}
		}

	 	return $vegetables;
	}

	$vegetables = getVegetables();

?>

<html>
<head>
    <meta charset="UTF-8" />
    <title>野菜と果物一覧</title>
</head>
<body>
    <h1>野菜一覧だよ</h1>
	<?php 
		$before_vegetable = "";
		if (count($vegetables) > 0) {
			foreach ($vegetables as $data) {
				if ($before_vegetable != $data['category_name']) {
					echo "<h2>";
					echo $data['category_name'];
					echo "</h2>";
				}
				echo "<li>";
				echo $data['item_name'];
				echo "</li>";
				echo "<br />";
				$before_vegetable = $data['category_name'];
			}
		}
	?>

	<hr />

    <?php $before_vegetable = ""; ?>
    	<?php if (count($vegetables) > 0): ?>   
    		<?php foreach ($vegetables as $data): ?>
    			<?php if ($before_vegetable != $data['category_name']): ?>
    				<h2><?php echo $data['category_name']; ?></h2>
				<?php endif; ?>
				<li>
					<?php echo $data['item_name']; ?>
				</li>　
				<?php $before_vegetable = $data['category_name']; ?>
			<?php endforeach; ?>　
		<?php endif; ?> 
</body>
</html>