<?php 

// データベースに接続
$link = mysql_connect('localhost', 'root', 'pc19930831A');
if (!$link) {
	echo "データベースに接続できません。";
}

// データベースを選択
mysql_select_db('vegetable',$link);

mysql_query('SET NAMES utf8', $link);

// データを取得
$sql = "SELECT * FROM categories,items WHERE categories.id=items.category_id ORDER BY items.created DESC";
$result = mysql_query($sql);

// 結果を$vegetablesに格納
$vegetables = array();
$count = mysql_num_rows($result);
if ($result !== false && mysql_num_rows($result)) {
	while ($vegetable = mysql_fetch_assoc($result)) {
			$vegetables[] = $vegetable;
	}
}



// 取得結果を解放して接続を閉じる
mysql_free_result($result);
mysql_close($link);

include 'views_01/02_vegetablelist_view.php';
?>