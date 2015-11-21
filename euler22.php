<?php
/*
* Gnieark's anwser to euler problem 22
* https://projecteuler.net/problem=22
*/

$names=explode('","',substr(file_get_contents("inc/p022_names.txt"),1,-1));
sort($names);

$letters="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
for($i=0;$i<strlen($letters);$i++){
  $lettersScores[substr($letters,$i,1)]=$i+1;
}

$sum=0;
foreach($names as $order => $name){
  $nameScore=0;
  for($i=0; $i<strlen($name);$i++){
    $nameScore+=$lettersScores[substr($name,$i,1)];
  }
  $sum+=$nameScore * ($order +1);
}
echo $sum;