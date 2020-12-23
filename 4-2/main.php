<?php
require_once('db_connect.php');
require_once('function.php');

check_user_logged_in();

$pdo = db_connect();
try{
  $sql = "SELECT * FROM books ORDER BY id ASC;";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
}catch (PDOException $e) {
  echo 'Error: ' . $e->getMessage();
        die();
 }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="style_main.css">
</head>
<body>
  <h1>在庫一覧画面</h1><br>
  <a href ="books.php">新規登録</a>
  <a href ="logout.php">ログアウト</a>
  <table>
   <thead>
    <tr>
     <th>タイトル</th>
     <th>発売日</th>
     <th>在庫数</th>
     <th></th>
    </tr>
   </thead>
   <tbody>
   <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
    <tr>
     <th><?php echo $row['title']; ?></th>
     <th><?php echo $row['date']; ?></th>
     <th><?php echo $row['stock']; ?></th>
     <th>
      <a href="delete.php?id=<?php echo $row['id']; ?>"><input type="submit" value="削除"></a>
     </th>
    </tr>
   <?php } ?>
   </tbody>
  </table>
</body>
</html>