<?php
    // $a, $bとして引数を受け取り、それを足し算する関数を定義して下さい
	// function add() <- addの右側に半角スペースは入れない
	// $answerという変数名がその中身に合致していないので、よくない => ex. $sum
	function add($a, $b) {
		$sum = $a + $b;
		return $sum; 
	}

    // 上記定義した関数を利用し、任意の足し算を行い、結果を$resultという変数に格納して下さい
    // add(1, 2)のaddの右側にもいれない
    // $cも$answerと同様
	$sum = add(1, 2);

    // 上記の$resultの変数をvar_dumpで結果を確認できるようにしておいてください
    var_dump($sum);
?>