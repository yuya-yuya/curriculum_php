<?php
$num = 0;
while($num<10){
  echo $num;
  $num++;
}

echo '<br>';

$num = 0 ;
do{
  echo $num;
  $num++;
}while($num < 10);

echo '<br>';

for($i=0;$i<10;$i++){
  echo $i;
}

echo '<br>';

$num = 0;
while($num < 10){
  echo $num;
  $num++;
  if($num==5){
  break;
  }
}

echo '<br>';

$num = 0;
while($num < 101){
  echo $num;
  echo '<br>';
  $num++;
}

for($num=0;$num<101;$num++){
  echo $num;
  echo '<br>';
}
?>