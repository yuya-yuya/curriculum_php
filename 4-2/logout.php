<?php
session_start();

$_SESSION = array();

session_destroy();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style_out.css">
</head>
<body>
  <p>ログアウトしました。</p>
  <a href="login.php"><p>ログイン画面に戻る。</p></a>
</body>
</html>