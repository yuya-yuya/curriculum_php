<?php
for($number = 1 ; $number < 101 ; $number++){
  if( $number % 3 === 0  && $number % 5 === 0) {
    echo "FizzBuzz!!";
    echo '<br>';
  } elseif($number % 3 === 0) {
    echo "Fizz!";
    echo '<br>';
  } elseif($number % 5 === 0){
    echo "Buzz";
    echo '<br>';
  } else{
  echo $number;
  echo '<br>';
  }
}
?>