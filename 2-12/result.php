<!-- <?php
    $my_name = $_POST['my_name'];
    $password = $_POST['password'];
    $sex = $_POST['sex'];
    $hidden_param = $_POST['hidden_param'];
    $number = $_POST['number']
?>
    <p>私の名前は<?php echo $my_name; ?>です。</p>
    <p>パスワードは<?php echo $password; ?>です。</p>
    <p>性別は<?php echo $sex; ?>です。</p>
    <p>性別は<?php echo $hidden_param; ?>です。</p>
    <p>個数 <?php echo $number; ?> </p>  -->

    <?php
     $my_name = $_POST["my_name"];
     $item = $_POST["item"];
     $number = $_POST["number"];
    ?>

    <p>お名前：<?php echo $my_name; ?></p><br>
    <p>ご希望商品<?php echo $item; ?></p><br>
    <p>個数：<?php echo $number; ?></p><br>