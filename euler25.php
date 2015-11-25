<?php
/*
* Gnieark's anwser to euler problem 26
* https://projecteuler.net/problem=26
*/
$beastDenominateur=0;
$longestCycle=0;
for ($denominateur=2; $denominateur < 1000; $denominateur ++){
  
  $reste=1;
  $restes=array();
  $count=0;
  while (!in_array($reste,$restes)){
    $restes[]=$reste;
    $reste=$reste*10;
    $reste=fmod($reste,$denominateur);
    $count++;
  }  
  if($count > $longestCycle){
    $longestCycle=$count;
    $beastDenominateur=$denominateur;
  }
}

echo $beastDenominateur."\n";