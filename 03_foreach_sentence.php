<?php

	// 連想配列を作成
	// => : アロー演算子
	// array() <= 一体、foreach () {} <= 役割分担
	$array = array(
		"first" => "hogehoge",
		"second" => "hugahuga",
		"third" => "mogemoge"
	);

	// foreach分を使って、key, valueをそれぞれ毎回echoするような制御構文を書いてください。
	foreach ($array as $key => $value) {
		echo $key;
		echo "<br />";
		echo $value;
		echo "<br />";
	}

?>