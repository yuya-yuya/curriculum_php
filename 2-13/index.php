<?php
//  $x = 5.2;
//  echo ceil($x);
//  $x = 5.2;
//  echo floor($x);
//  $x = 5.2;
//  echo round($x);

// echo '<br>';
    
//     function circleArea($r) {
//         $circle_area = $r * $r * pi();
//         echo $circle_area; 
//     }
//     // 半径が2の円の面積の計算
//     circleArea(2);
    
// echo '<br>';
// echo mt_rand(1, 100);
// $str = "hogehoge";
// echo strlen($str);
// $str = "yoneyama";
// echo strpos($str, "a");
// $str = "yoneyama";
// echo substr($str, -2, 2);
// $str = "yoneyama";
// echo str_replace("neya", "NEYA", $str);

$x = 3.89;
echo ceil($x);

echo '<br>';

$x = 4.78;
echo floor($x);

echo '<br>';

$x = 3.786;
echo round($x); 

echo '<br>';

function CircleArea($r){
    $Area = $r * 2 * pi();
    echo $Area;
}

CircleArea(6);

echo '<br>';

echo mt_rand(1,100);

echo '<br>';

$str = "keiouniversity 慶應";
echo strlen($str);

echo '<br>';

echo strpos($str,"i");

echo '<br>';

echo substr($str,6 ,4);

echo '<br>';

echo str_replace("keio","waseda",$str);

echo '<br>';

echo mb_strlen($str);

echo '<br>';

$name= "yuya";
$limit_number = 40 ;
echo printf("%sの順位は%dです",$name,$limit_number);

echo '<br>';

$number =6 ;
$nums = 18 ;
printf("%02dは%03dの1/3です。",$nums,$number);

$number = printf("%02dは%03dの1/3です。",$nums,$number) ;
echo $number;
?>