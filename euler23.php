<?php
/*
* Gnieark's anwser to euler problem 23
* https://projecteuler.net/problem=23
*/

require_once("_functions.php");

//list of abundants
$abundants=array();
for($i=2; $i <= 28123; $i++){
  if (isAbundant($i)){
    $abundants[]=$i;
  }
}
//list of sums of abundants
$listOfSumOfAbundants=array();
$sumTotalOfAbundants=0;
  
for($i=0; $i < count($abundants); $i++){
    for($j=0; $j < count($abundants); $j++){
        $somme = $abundants[$i]+ $abundants[$j];
        if($somme > 28123){
            break;
        }
        $listOfSumOfAbundants[$somme]=true;
    }
}
$sum=0;
for($i=0; $i <= 28123; $i++){
  if(!isset($listOfSumOfAbundants[$i])){
    $sum +=$i;
  }
}

echo $sum;