<?php
require_once("getData.php");

$x = new getData();
$post_datas = $x->getPostData();
$user_datas = $x ->getUserData();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="wrap"></div>
   <div class="header clearfix">
     <div class="header-left">
       <img src="logo.png" alt="ロゴ画像" width="200px" height="120px">
     </div>
     <div class="header-right clearfix">
       <div class="header-right-upper">
         <?php foreach($user_datas as $u_data){; ?>
          <p>ようこそ <?php echo $u_data['last_name'];?> さん</P>
         <?php } ;?>
       </div>
       <div class="header-right-lowwer"></div>
     </div>
   </div>
   <div class="contents">
    <table>
     <thead>
       <tr>
         <th class>記事ID</th>
         <th>タイトル</th>
         <th>カテゴリ</th>
         <th>本文</th>
         <th>投稿日</th>
      </tr>
     </thead>
     <tbody>
      <?php foreach($post_datas as $data){;?>
      <tr>
       <td><?php echo $data['id']; ?></td>
       <td><?php echo $data['title']; ?></td>
       <?php switch($data['category_no']){ 
        case '1':
        $data['category_no'] = '食事';
        break;
        case '2':
        $data['category_no'] = '旅行';
        break;
        default:
        $data['category_no'] = 'その他';
       }?>
       <td><?php echo $data['category_no']; ?></td>
       <td><?php echo $data['comment']; ?></td>
       <td><?php echo $data['created']; ?></td>
      </tr>
      <?php } ;?>
     </tbody>
    </table>
   </div>
   <div class="footer"></div>
</body>
</html>