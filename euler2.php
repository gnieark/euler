<?php
/*
* Gnieark's anwser to euler problem 2
* https://projecteuler.net/problem=2
*/
$i=1;
$j=2;
$sum=0;
while($i<4000000){
    if(fmod($j,2)==0){
         $sum+=$j;
    }
    $new=$i+$j;
    $i=$j;
    $j=$new;
}


echo $sum;