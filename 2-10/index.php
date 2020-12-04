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