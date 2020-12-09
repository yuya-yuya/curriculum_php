<?php
// ループ文×条件分岐
$sum = 0;
$counter = 0;

while($sum <= 40){
  $num = mt_rand(1,6);
  $sum = $sum + $num; 
  $counter++; 
  if($sum <= 40){
  printf("%d回目 = %d",$counter,$num);
  echo "<br>";
  }else{
    $counter--;
    printf("合計%d回でゴールしました",$counter);
  }
}

echo "<br>";

// 関数×条件分岐
function greeting ($x){
  printf("今%02d時台です",$x);
  echo '<br>';
  if(6 <= $x && $x<= 11){
    echo "おはようございます";
  }elseif(12 <= $x && $x <= 17){
    echo "こんにちは";
  }else{
    echo "こんばんは";
  }
}


$num = date("H",time());
echo greeting($num);
?>