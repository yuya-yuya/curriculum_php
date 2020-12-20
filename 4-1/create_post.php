<?php
require_once('function.php');
require_once('db_connect.php');

check_user_logged_in();

// 提出ボタンが押された場合
if (!empty($_POST)) {
    // titleとcontentの入力チェック
    if (empty($_POST["title"])) {
        echo 'タイトルが未入力です。';
    } elseif (empty($_POST["content"])){
        echo 'コンテンツが未入力です。';
    }

    if (!empty($_POST["title"]) && !empty($_POST["content"])) {
        // 入力したtitleとcontentを格納
        $title = $_POST["title"];
        $content = $_POST["content"];
        // PDOのインスタンスを取得
        $pdo = db_connect();
        try {
            // SQL文の準備
            $sql = "insert into posts(title,content) value(:title,:content)";
            // プリペアドステートメントの準備
            $stmt = $pdo->prepare($sql);
            // タイトルをバインド
            $stmt->bindParam(':title', $title);
            // 本文をバインド
            $stmt->bindParam(':content', $content);
            // 実行
            $stmt->execute();
            // main.phpにリダイレクト
            header("Location: main.php");
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
                  die();
        }
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
    <h1>記事登録</h1>
    <form method="POST" action="">
        title:<br>
        <input type="text" name="title" id="title" style="width:200px;height:50px;">
        <br>
        content:<br>
        <input type="text" name="content" id="content" style="width:200px;height:100px;"><br>
        <input type="submit" value="submit" id="post" name="post">
    </form>
</body>
</html>