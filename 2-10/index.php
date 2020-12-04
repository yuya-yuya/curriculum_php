<?php

// function getTriangleArea($base, $height) {
//   $area = $base * $height / 2;
//   print "三角形の面積は".$area."だよ。";
// }

// // 1)
// getTriangleArea(10,5);
// // 2)
// getTriangleArea(15,8);
// // 3)
// getTriangleArea(8,6);



echo '<br>';

function Rectangular($base, $height ,$width) {
  $area = $base * $height * $width;
  print $area; 
}

Rectangular(5,8,10);
?>

1. ハッシュ化…元のデータから一定の計算手順に従ってハッシュ値と呼ばれる規則性のない固定長の値を求め、その値によって元のデータを置き換えること。
2. 総合テスト…構築したシステムが全体で予定通りの機能を満たしているか、また機能や性能が仕様書通りに構築できているかを検証することです。 
3. デバッグ…コンピュータのプログラムの誤りを見つけ、手直しをすること。