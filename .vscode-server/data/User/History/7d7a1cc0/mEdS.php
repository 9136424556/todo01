<?php
$fizz = "fizz";
$buzz = "buzz";
$fizzbuzz = "fizzbuzz";

for ($i = 1; $i <= 50; $i++) {
    if ($i % 15 ===0) {
      echo $fizzbuzz;
    } else if ($i % 3== 0) {
      echo $fizz;
    } else if ($i % 5==0) {
      echo $buzz;
    } else {
        $i;
    }
}