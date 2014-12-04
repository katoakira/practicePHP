<?php 

// データベースに接続
$link = mysql_connect('localhost', 'root', 'pc19930831A');
if (!$link) {
	echo "データベースに接続できません。";
}

// データベースを選択
mysql_select_db('vegetable', $link);

mysql_query('SET NAMES utf8', $link);

// データを取得
$sql = "SELECT * FROM categories,items WHERE categories.id=items.category_id ORDER BY categories.id";
$result = mysql_query($sql);

// 結果を$vegetablesに格納
$vegetables = array();
$count = mysql_num_rows($result);
if ($result !== false && $count) {
	for ($i = 0; $i < $count, $vegetable = mysql_fetch_assoc($result); $i++) {
		$vegetables[] = $vegetable;
		// var_dump ($vegetable);
		echo "<br />";
	}
}



// var_dump($a);
// echo "<br />";
// echo "<br />";

// echo "<br />";
// var_dump($vegetables);
// echo "<br />";
// var_dump(mysql_fetch_assoc($result));

// 取得結果を解放して接続を閉じる
mysql_free_result($result);
mysql_close($link);

include 'views_01/vegetablelist_view.php';
?>


