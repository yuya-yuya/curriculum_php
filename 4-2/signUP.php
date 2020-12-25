<?php
require_once("db_connect.php");

$name = $_POST["name"];
$password = $_POST["password"];

$password_hash = password_hash($password, PASSWORD_DEFAULT);

if (isset($_POST["signUp"])) {
  $pdo = db_connect();
try{
  $sql = "insert into users(name,password) value(:name,:password)";
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':password', $password_hash);
  $stmt->execute();
  echo "登録完了";
}catch (PDOException $e) {
  echo 'Error: ' . $e->getMessage();
        die();
  }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="signUP1.css">
</head>
<body>
<div class="header">
  <h3>ユーザー登録画面</h3>
  <a href="login.php"><input type="submit" value="ログイン画面" class="login"></a>
</div>

<div class="main">
  <form method="POST" action="">
      <input type="text" name="name" class="name" placeholder="ユーザー名"><br>
      <input type="password" name="password" class="password" placeholder="パスワード"><br>
      <input type="submit" value="新規登録" class="signUp" name="signUp">
    </div>
  </form>
</div>
</body>
</html>