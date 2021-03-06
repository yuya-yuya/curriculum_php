<?php
require_once("db_connect.php");
session_start();

if(isset($_POST["login"])){
  if(empty($_POST["name"])){
    echo "名前が未入力です";
  }

  if(empty($_POST["password"])){
    echo "パスワードが未入力です";
  }

  if(!empty($_POST["name"]) && !empty($_POST["password"])){
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
    $pass = htmlspecialchars($_POST['password'], ENT_QUOTES);

    $pdo = db_connect();
        try {
            $sql = "SELECT * FROM users WHERE name = :name";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            die();
        }
      
        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          if (password_verify($pass, $row['password'])) {
              $_SESSION["user_id"] = $row['id'];
              $_SESSION["user_name"] = $row['name'];
              header("Location: main.php");
              exit;
          } else {
              echo "パスワードに誤りがあります。";
          }
      } else {
          echo "ユーザー名かパスワードに誤りがあります。";
      }
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="login1.css">
</head>
<body>
<div class="header">
  <h3 class="user_regi">ログイン画面</h3>
  <a href="signUP.php"><input type="submit" value="新規ユーザー登録" class="new_user"></a>
  </div>
</div>

<div class="main">
  <form method="POST" action="">
    <div class="wrap">
      <input type="text" name="name" class="name" placeholder="ユーザー名"><br>
      <input type="password" name="password" class="password" placeholder="パスワード"><br>
      <input type="submit" value="ログイン" class="login" name="login">
    </div>
  </form>
</div>
</body>
</html>