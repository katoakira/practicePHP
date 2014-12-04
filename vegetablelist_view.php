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
