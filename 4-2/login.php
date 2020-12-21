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
  <link rel="stylesheet" href="style_login.css">
</head>
<body>
  <h1 id="user_regi">ログイン画面</h1>
  <div id="new_user">新規ユーザー登録</div>
  <form method="POST" action="">
    <div class="wrap">
      <input type="text" name="name" id="name" placeholder="ユーザー名"><br>
      <input type="text" name="password" id="password" placeholder="パスワード"><br>
      <input type="submit" value="ログイン" id="login" name="login">
    </div>
  </form>
</body>
</html>