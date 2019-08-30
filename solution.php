<?php

/* fibonacci series */
if(isset($_POST['inp'])){
   $a='0';
   $b='1';
   echo "fibbonacci series is $a <br>";
   echo "fibbonacci series is $b <br>";
  for ($i = 0; $i < $_POST['fibo']; $i++) {
    $c = $a + $b;
      echo "fibbonacci series is $c <br>";
    $a = $b;
    $b = $c;
  }
}

/* leap year */
if(isset($_POST['inpt'])){
$y = $_POST['y'];
  if($y%4 == 0 && $y%100 != 0 || $y%400 == 0){

    echo $y. " " . "is a leap year.";
  }
  else{
    echo $y. "not a leap year.";
  }
}
?>
