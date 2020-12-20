<?php
 require_once('db_connect.php');

 $name = $_POST['name'];
 $password = $_POST['password'];
 $password_hash = password_hash($password, PASSWORD_DEFAULT);

 if(empty($name) && empty($password_hash)){
     echo "";
 }elseif(empty($name)){
    echo "名前が未入力です。";
 }elseif(empty($password_hash)){
    echo "パスワードが未入力です。";
 }else{
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
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <h1>新規登録</h1>
    <form method="POST" action="">
        user:<br>
        <input type="text" name="name" id="name">
        <br>
        password:<br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="submit" id="signUp" name="signUp">
    </form>
</body>
</html>

