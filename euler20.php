<?php
/*
* Gnieark's anwser to euler problem 20
* https://projecteuler.net/problem=20
*/

$digits=str_split(gmp_fact(100));
$sum=0;
foreach($digits as $digit)
  $sum+=$digit;
 
echo $sum;