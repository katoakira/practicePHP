<?php　
    // 1 + 1 をしてその結果を返す関数を定義してください
	function add () {
		$answer = 1 + 1; 
		return $answer;
	}

    // 1 + 1 をする関数を呼んで(コールして)、その結果を$resultという変数に格納してください
	$result = add();

    // $resultの結果をvar_dumpで出力しておいてください
	var_dump($result);
?>