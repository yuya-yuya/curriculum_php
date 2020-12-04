<!-- <form action="result.php" method="post">
      お名前：<input type="text" name="my_name" /><br>
      パスワード：<input type="password" name="password" /><br>
      性別：
      <input type="radio" name="sex" value="男性">男性
      <input type="radio" name="sex" value="女性">女性
    <br>
      <input type="hidden" name="hidden_param" value="隠しパラメータから" />
      <input type="submit" value="送信するよ！" />
      <select name="number">
      <?php for ($i=1;$i<=10;$i++){ ?>
       <option value= <?php echo $i; ?>>
       <?php echo $i; ?>
       </option>
       <?php } ?>  
      </select>
</form> -->

<form action="result.php" method="post"><br>
 お名前は：<input type="text" name="my_name" /><br>
 ご希望商品：
 <input type="radio" name="item" value="A" />A賞
 <input type="radio" name="item" value="B" />B賞
 <input type="radio" name="item" value="C" />C賞
 <br>
 個数:
 <select name="number">
  <?php for ($i=1 ; $i<11 ; $i++){ ?>
   <option value="<?php echo $i; ?>">
    <?php echo $i; ?>
   </option>
  <?php } ?>
 </select>
 <input type="submit" value="申込"?>
</form>

