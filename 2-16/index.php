<?php
// $testFile = "test.txt";
// $contents = "こんにちは！";

// if (is_writable($testFile)) {

//     // 書き込み可能なときの処理
//     // とりあえず、確認のため、echoで表示だけさせる
//     $fp = fopen($testFile,"w");
//     fwrite($fp, $contents);
//     fclose($fp);
//     echo "finish writing!!";
// } else {
//     // 書き込み不可のときの処理
//     echo "not writable!";
//     exit;
// }

// echo '<br>';

// if (is_readable($test_file)) {
//   // 読み込み可能なときの処理
//   // 対象のファイルを開く
//   $fp = fopen($test_file, "r");
//   // 開いたファイルから1行ずつ読み込む
//   while ($line = fgets($fp)) {
//       // 改行コード込みで1行ずつ出力
//       echo $line.'<br>';
//   }
//   // ファイルを閉じる
//   fclose($fp);
// } else {
//   // 読み込み不可のときの処理
//   echo "not readable!";
//   exit;
// }

$file = "test.txt";
$contents = "おはようございます！！";

if(is_writable($file)){
  echo "書き込み可能です！";
  $fp = fopen($file,"w");
  fwrite($fp,$contents);
  fclose($fp);
  echo "<br>";
  echo "書き込み終了";
}else {
  echo "書き込みできません！";
  exit;
}

echo "<br>";

$file = "test2.txt";

if(is_readable($file)){
  $fp = fopen($file,"r");
  while ($line = fgets($fp)) {
    echo $line.'<br>';
}
  fclose($fp);
}else {
  echo "読み込みできません！";
  exit;
}
?>