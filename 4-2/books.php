<?php
require_once("db_connect.php");
require_once("function.php");

check_user_logged_in();


$title = $_POST["title"];
$date = $_POST["date"];
$stock = $_POST["stock"];

if(isset($_POST["books"])){  
  if(empty($_POST["title"])){
    echo "タイトルが未入力です。";
  }

  if(empty($_POST["date"])){
    echo "発売日が未入力です。";
  }

  if(empty($_POST["stock"])){
    echo "在庫数を選んでください。";
  }

  if(!empty($_POST["date"]) && !empty($_POST["title"]) && !empty($_POST["stock"])){
    $pdo = db_connect();
    try{
      $sql = "insert into books(title,date,stock) value(:title,:date,:stock)";
      $stmt = $pdo->prepare($sql);
      $stmt->bindParam(':title',$title);
      $stmt->bindParam(':date', $date);
      $stmt->bindParam(':stock',$stock);
      $stmt->execute();
      echo "登録完了";
    }catch(PDOException $e) {
      echo 'Error: ' . $e->getMessage();
      die();
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
  <link rel="stylesheet" href="">
</head>
<body>
  <h1>本 登録画面</h1>
  <form method="POST" action="">
   <input type="text" name="title" id="title" placeholder="タイトル"><br>
   <input type="text" name="date" id="date" placeholder="発売日">
   <p>在庫数</p>
   <select name="stock" id="stock">
    <option>1</option>
   </select><br>
   <input type="submit" name="books" value="登録">
  </form>
</body>
</html>