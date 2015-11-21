<?php
/*
* Gnieark's anwser to euler problem 21
* https://projecteuler.net/problem=21
*/
include("_functions.php");

$sumOfDivisors=array();
for($i=1;$i<10000;$i++){
  $sumOfDivisors[$i]=array_sum(getAllDivisors($i,true,false));
}
$sum=0;
//If d(a) = b and d(b) = a, where a ≠ b,

foreach($sumOfDivisors as $a => $d){

  if((isset($sumOfDivisors[$d])) && ($sumOfDivisors[$d]==$a) && ($a<>$d)){
    $sum+=$a;
  }
}
echo $sum;