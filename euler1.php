<?php
/*
* Gnieark's anwser to euler problem 1
* https://projecteuler.net/problem=1
*/
$sum=0;
for ($i=2;$i<1000;$i++){
    if((fmod($i,3)==0) OR (fmod($i,5)==0)){
        $sum=$sum+$i;
    }
}

echo $sum;