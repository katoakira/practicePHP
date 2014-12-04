<html>
<head>
    <meta charset="UTF-8" />
    <title>野菜と果物一覧</title>
</head>
<body>
    <h1>野菜一覧だよ</h1>
    	<?php $before_vegetable = ""?>
    	<?php while ($row = )
        <?php if (count($vegetables) > 0): ?>
	<ul>
		<?php foreach ($vegetables as $vegetable): ?>
		<li>
			<?php echo htmlspecialchars($vegetable['item_name'],ENT_QUOTES,'UTF-8'); ?>
			<?php var_dump($vegetable['category_name']); ?>
 		</li>
		<?php endforeach; ?>
	</ul>
	<?php endif; ?>
 	

</body>
</html>