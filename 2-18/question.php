<?php
$my_name = $_POST[my_name];
?>

<head>
  <link rel="stylesheet" href="style2.css">
  <title>質問</title>
</head>
<body>
<p>お疲れ様です<?php echo $my_name; ?>さん</p>

<form action="answer.php" method="POST">
<input type="hidden" name="my_name" value="<?php echo $my_name?>">
<h2>①ネットワークのポート番号は何番？</h2>
 <input type="radio" name="number" value="80">80
 <input type="radio" name="number" value="22">22
 <input type="radio" name="number" value="20">20
 <input type="radio" name="number" value="21">21
<h2>②Webページを作成するための言語は？</h2>
 <input type="radio" name="lan" value="PHP">PHP
 <input type="radio" name="lan" value="Python">Python
 <input type="radio" name="lan" value="JAVA">JAVA
 <input type="radio" name="lan" value="HTML">HTML
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
 <input type="radio" name="com" value="join">join
 <input type="radio" name="com" value="select">select
 <input type="radio" name="com" value="insert">insert
 <input type="radio" name="com" value="update">update
<br>
<input type="submit" value="回答する">
</form>
</body>
