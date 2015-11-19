<?php
/*
* Gnieark's anwser to euler problem 14
* https://projecteuler.net/problem=14
*/
$longestSequence=0;
$startOfLongestSequence=0;
for($i=1;$i<1000000;$i++){
  //echo $i."\n";
  $long=countCollatzSequence($i);
  if($long>$longestSequence){
   $longestSequence=$long;
   $startOfLongestSequence=$i;
  }
}
echo $startOfLongestSequence;

function countCollatzSequence($start){
  $count=1;
  $number=$start;
  $next=nextCollatzNumber($number);
  while($number<>1){
    $number=nextCollatzNumber($number);
    $count++;
  }
  return $count;
}

function nextCollatzNumber($previous){
  if(fmod($previous,2)==0){
    //odd
    return $previous/2;
  }else{
    //even
    return 3 * $previous + 1;
  }
}