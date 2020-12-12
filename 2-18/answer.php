<?php
$number = $_POST[number];
$lan = $_POST[lan];
$com = $_POST[com];
$my_name = $_POST[my_name];
?>

<head>
  <title>答え</title>
  <link rel="stylesheet" href="style3.css">
</head>

<body>
<p><?php echo $my_name; ?>さんの結果は・・？</p>
<p>①の答え</p><br>
<?php if($number === "80" ){ ?>
 <p><?php echo "正解！"; ?></p>
<?php } else{ ?>
 <p><?php echo "残念！"; ?></p>
<?php } ?><br>
<p>②の答え</p>
<?php if($lan === "HTML"){ ?>
 <p><?php echo "正解！"; ?></p>
<?php } else{ ?>
 <p><?php echo "残念！"; ?></p>
<?php } ?><br>
<p>③の答え</p><br>
<?php if($com === "join"){ ?>
 <p><?php echo "正解！"; ?></p>
<?php } else{ ?>
 <p><?php echo "残念！"; ?></p>
<?php } ?>
</body>