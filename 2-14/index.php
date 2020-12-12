<?php
// $member = ["tanaka", "sasaki","kimura","yoshida","uchida"];
// echo count($member);

// sort($member);
// var_dump($member);

// echo '<br>';

// $numbers = [26, 35, 17, 67, 45];
// sort($numbers);
// var_dump($numbers);

// echo '<br>';

// var_dump(in_array("tanaka", $member));

// echo '<br>';

// if(in_array("tanaka",$member)){
//   echo "田中さんはいるよ";
// } else{
//   echo "田中さんはいないよ";
// }

// echo '<br>';

// $atstr = implode("@", $member);
// var_dump($atstr);

// echo '<br>';

// $array = explode("@",$atstr);
// var_dump($array);

$alp = ["a","d","c","b","e","f"];

echo count($alp);

echo '<br>';

sort($alp);
var_dump($alp);

echo '<br>';

var_dump(in_array("a",$alp));

echo '<br>';

$alp1 = implode("&",$alp);
var_dump($alp1);

echo '<br>';

$alp2 = explode("&",$alp1);
var_dump($alp2);
?>