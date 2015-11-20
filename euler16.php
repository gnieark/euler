<?php
/*
* Gnieark's anwser to euler problem 16
* https://projecteuler.net/problem=16
*/

$digits=str_split(gmp_pow(2,1000));
$sum=0;
foreach($digits as $digit){
  $sum+=$digit;
}
echo $sum;