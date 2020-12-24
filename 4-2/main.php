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
  <link rel="stylesheet" href="main1.css">
</head>
<body>
<div class="header">
  <h2>在庫一覧画面</h2><br>
</div>

<div class="main">
  <a href ="books.php"><input type="submit" value="新規登録" class="new_legi"></a>
  <a href ="logout.php"><input type="submit" value="ログアウト" class="logout"></a>
</div>

<div class="tablelayout"> 
  <table border="1" style="border-collapse: collapse">
  <thead>
    <tr class="tablehead">
     <th width="20%" height="50px">タイトル</th>
     <th width="30%" height="50px"> 発売日</th>
     <th width="10%" height="50px"> 在庫数</th>
     <th width="10%" height="50px"></th>
    </tr>
  </thead>
  <tbody>
   <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
    <tr>
     <th width="20%" height="50px"><?php echo $row['title']; ?></th>
     <th width="30%" height="50px"><?php echo $row['date']; ?></th>
     <th width="10%" height="50px"><?php echo $row['stock']; ?></th>
     <th width="10%" height="50px">
      <a href="delete.php?id=<?php echo $row['id']; ?>"><input type="submit" value="削除" class="delete"></a>
     </th>
    </tr>
   <?php } ?>
  </tbody>
  </table>
</div>
</body>
</html>