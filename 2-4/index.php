<?php
$age = 27;

if($age >= 20){
  echo "お酒が飲めるぞ";
}else{
  echo "お酒は二十歳になってから";
}

echo '<br>';

$age = 24;
// 学生かどうか
$is_student = true;

if ($age < 25 && $is_student) {
    echo '学割パックが使えるよ';
}elseif ($age < 25) {
  echo '若者応援割引が使えるよ';
}

echo '<br>';

$blood ='B';
switch ($blood) {
  case 'A':
    print 'A型です';
    break;
  case 'B':
    print 'B型です';
    break;
}

echo '<br>';

$name = 'taro';
$password = 'pass';

if ($name == 'taro' && $password =='pass' ) {
  echo "ログイン成功です";
} elseif ($name == "taro") {
  echo "パスワードが間違っています";
} elseif ($password == pass) {
  echo "名前が間違っています";
} else {
  echo "入力情報が間違っています";
}
?>