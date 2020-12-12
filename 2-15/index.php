<?php
echo time();

echo '<br>';

echo date("Y-m-d H:i:s", time());

echo '<br>';

echo strtotime("2017/2/16 11:25:00");

echo '<br>';

echo strtotime("last Sunday");

echo '<br>';

echo strtotime("+2 day");
?>