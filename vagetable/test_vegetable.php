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
	
// もし$before_vegetableが$rowでなければカテゴリーの名前を表示し
// 次にアイテムを表示する 
// $row['category_name']に'野菜'という文字列が入っており
// データベースからカテゴリーテーブルに関して昇順でデータをすべて取り出してきているので
// while文で次のデータが$dataに入り
// 処理が実行される
$before_vegetable = "";
while ($data = mysql_fetch_assoc($result)) {
	// カテゴリを表示する
	if ($before_vegetable != $data['category_name']) {
		echo $data['category_name'];
		echo "<br />";
	}
	// アイテムを表示する
	echo "&nbsp;&nbsp;" . $data['item_name'];
	echo "<br />";
	$before_vegetable = $data['category_name'];
}

mysql_free_result($result);
mysql_close($link);
?>