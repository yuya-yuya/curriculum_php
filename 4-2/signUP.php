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
  <link rel="stylesheet" href="style_signUP.css">
</head>
<body>
  <h1 id="user_regi">ユーザー登録画面</h1>
  <form method="POST" action="">
    <div class="wrap">
      <input type="text" name="name" id="name" placeholder="ユーザー名"><br>
      <input type="text" name="password" id="password" placeholder="パスワード"><br>
      <input type="submit" value="新規登録" id="signUp" name="signUp">
    </div>
  </form>
</body>
</html>